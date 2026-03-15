<?php

namespace App\Http\Controllers;

use App\Models\Minecraft\AuthMeUser;

class HomeController extends Controller
{
    public function index()
    {

        $heroes = AuthMeUser::withSum([
            'purchases' => function ($query) {
                $query->where('status', 'approved');
            }
        ], 'amount_paid')
            ->having('purchases_sum_amount_paid', '>', 0)
            ->orderByDesc('purchases_sum_amount_paid')
            ->take(10)
            ->get();

        return view('welcome', compact('heroes'));
    }
}