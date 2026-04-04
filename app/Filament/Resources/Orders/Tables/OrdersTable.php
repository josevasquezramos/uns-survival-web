<?php

namespace App\Filament\Resources\Orders\Tables;

use App\Enums\OrderStatus;
use App\Models\Order;
use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class OrdersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order_number')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('buyer.username')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('target.username')
                    ->searchable()
                    ->placeholder('Own')
                    ->sortable(),
                TextColumn::make('product.name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('amount_paid')
                    ->label('Amount')
                    ->numeric()
                    ->prefix('S/ ')
                    ->sortable(),
                TextColumn::make('payment_datetime')
                    ->dateTime()
                    ->sortable(),
                ImageColumn::make('receipt_image')
                    ->label('Evidence')
                    ->disk('public')
                    ->url(fn (Order $record): string => Storage::disk('public')->url($record->receipt_image))
                    ->openUrlInNewTab(),
                    
                TextColumn::make('status')
                    ->badge()
                    ->color(fn (OrderStatus $state): string => match ($state) {
                        OrderStatus::PENDING => 'warning',
                        OrderStatus::APPROVED => 'success',
                        OrderStatus::REJECTED => 'danger',
                    })
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->recordActions([
                Action::make('Approve')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->action(fn (Order $record) => $record->update(['status' => OrderStatus::APPROVED]))
                    ->disabled(fn (Order $record) => $record->status === OrderStatus::APPROVED),
                Action::make('Reject')
                    ->icon('heroicon-o-x-circle')
                    ->color('danger')
                    ->requiresConfirmation()
                    ->action(fn (Order $record) => $record->update(['status' => OrderStatus::REJECTED]))
                    ->disabled(fn (Order $record) => $record->status === OrderStatus::REJECTED),
                EditAction::make(),
            ])
            ->toolbarActions([
            ]);
    }
}