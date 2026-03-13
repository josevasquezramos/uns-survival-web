<?php

namespace Database\Seeders;

use App\Enums\ProductType;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DONACIÓN
        Product::create([
            'name' => 'Donación Libre',
            'price' => 0.00,
            'type' => ProductType::DONATION,
        ]);

        // RANGOS
        Product::create([
            'name' => 'Rango Egresado Temporal',
            'price' => 3.00,
            'type' => ProductType::RANK,
        ]);
        Product::create([
            'name' => 'Rango Egresado Permanente',
            'price' => 10.00,
            'type' => ProductType::RANK,
        ]);

        Product::create([
            'name' => 'Rango Bachiller Temporal',
            'price' => 7.00,
            'type' => ProductType::RANK,
        ]);
        Product::create([
            'name' => 'Rango Bachiller Permanente',
            'price' => 20.00,
            'type' => ProductType::RANK,
        ]);

        Product::create([
            'name' => 'Rango Doctor Temporal',
            'price' => 15.00,
            'type' => ProductType::RANK,
        ]);
        Product::create([
            'name' => 'Rango Doctor Permanente',
            'price' => 50.00,
            'type' => ProductType::RANK,
        ]);

        // EVENTO
        Product::create([
            'name' => 'Ticket: Bingo',
            'price' => 1.00,
            'type' => ProductType::EVENT,
        ]);
    }
}
