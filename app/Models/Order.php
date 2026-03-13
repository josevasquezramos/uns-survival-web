<?php

namespace App\Models;

use App\Enums\OrderStatus;
use App\Models\Minecraft\AuthMeUser;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_number',
        'buyer_id',
        'product_id',
        'target_id',
        'amount_paid',
        'payment_datetime',
        'receipt_image',
        'status',
        'admin_notes',
    ];

    protected $casts = [
        'status' => OrderStatus::class,
        'payment_datetime' => 'datetime',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function buyer()
    {
        return $this->belongsTo(AuthMeUser::class, 'buyer_id');
    }

    public function target()
    {
        return $this->belongsTo(AuthMeUser::class, 'target_id');
    }
}