<?php

namespace App\Filament\Resources\Orders\Schemas;

use App\Enums\OrderStatus;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('order_number'),
                Select::make('buyer_id')
                    ->searchable()
                    ->preload()
                    ->relationship('buyer', 'username'),
                Select::make('target_id')
                    ->searchable()
                    ->preload()
                    ->relationship('target', 'username'),
                Select::make('product_id')
                    ->searchable()
                    ->preload()
                    ->relationship('product', 'name'),
                TextInput::make('amount_paid')
                    ->required()
                    ->numeric()
                    ->prefix('S/ '),
                DateTimePicker::make('payment_datetime'),
                FileUpload::make('receipt_image')
                    ->disk('public')
                    ->directory('receipts')
                    ->deletable(false),
                Select::make('status')
                    ->options(OrderStatus::class)
                    ->required(),
                Textarea::make('admin_notes')
                    ->columnSpanFull(),
            ]);
    }
}