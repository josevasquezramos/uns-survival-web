<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Enums\ProductType;

class ShopController extends Controller
{
    public function index()
    {
        $rangos = Product::where('type', ProductType::RANK)->get();
        $eventos = Product::where('type', ProductType::EVENT)->get();
        $items = Product::where('type', ProductType::ITEM)->get();

        return view('shop.index', compact('rangos', 'eventos', 'items'));
    }
}