<?php

namespace App\Models;

use App\Enums\ProductType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'price',
        'type',
        'image_path',
    ];

    protected $casts = [
        'type' => ProductType::class,
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}