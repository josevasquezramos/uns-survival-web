<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->mediumInteger('buyer_id')->unsigned();
            $table->foreign('buyer_id')->references('id')->on('authme')->onDelete('cascade');
            $table->mediumInteger('target_id')->unsigned()->nullable();
            $table->foreign('target_id')->references('id')->on('authme')->onDelete('set null');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->decimal('amount_paid', 8, 2);
            $table->string('receipt_image');
            $table->string('status')->default('pending');
            $table->text('admin_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
