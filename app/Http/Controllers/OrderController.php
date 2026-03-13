<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Enums\ProductType;
use App\Enums\OrderStatus;
use App\Models\Minecraft\AuthMeUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('buyer_id', Auth::guard('minecraft')->id())
            ->latest()
            ->paginate(10);

        return view('orders.index', compact('orders'));
    }

    public function create(Request $request)
    {
        $products = Product::all();

        // PRELOAD: Solo 20 para no saturar la vista inicial
        $users = AuthMeUser::select('username')
            ->orderBy('lastlogin', 'desc')
            ->limit(20)
            ->get();

        $donationProduct = Product::where('type', ProductType::DONATION)->first();
        $selectedProductId = $request->query('product_id', $donationProduct?->id);
        $selectedAmount = $request->query('amount', '');

        return view('orders.create', compact('products', 'users', 'selectedProductId', 'selectedAmount'));
    }

    // NUEVO MÉTODO PARA BÚSQUEDA DINÁMICA
    public function searchUsers(Request $request)
    {
        $search = $request->query('q');

        if (!$search) {
            return response()->json([]);
        }

        // Busca coincidencias ignorando si se conectaron hace mucho
        $users = AuthMeUser::select('username')
            ->where('username', 'LIKE', "%{$search}%")
            ->orderBy('lastlogin', 'desc')
            ->limit(20)
            ->get();

        return response()->json($users);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'target_username' => 'nullable|string|exists:authme,username',
            'amount_paid' => 'required|numeric|min:0',
            'payment_datetime' => 'required|date',
            'receipt_image' => 'required|image|max:2048'
        ]);

        $imagePath = $request->file('receipt_image')->store('receipts', 'public');

        $target_id = null;
        if ($request->filled('target_username')) {
            $target_id = AuthMeUser::where('username', $request->target_username)->value('id');
        }

        Order::create([
            'order_number' => 'ORD-' . strtoupper(Str::random(8)),
            'buyer_id' => Auth::guard('minecraft')->id(),
            'product_id' => $request->product_id,
            'target_id' => $target_id,
            'amount_paid' => $request->amount_paid,
            'payment_datetime' => $request->payment_datetime,
            'receipt_image' => $imagePath,
            'status' => OrderStatus::PENDING,
        ]);

        return redirect()->route('orders.index')->with('success', 'Pago registrado exitosamente. Será revisado pronto.');
    }
}