@extends('layouts.panel', ['title' => 'Mis Pagos', 'header_title' => 'Historial de Pagos'])

@section('content')
<div class="space-y-4">
    <div class="flex justify-end">
        <a href="{{ route('orders.create') }}" class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 dark:focus-visible:ring-blue-500 bg-blue-600 text-white hover:bg-blue-700 h-10 px-4 py-2 shadow-sm">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path></svg>
            Nuevo Pago
        </a>
    </div>

    <div class="rounded-md border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-slate-500 dark:text-slate-400">
                <thead class="text-xs text-slate-700 uppercase bg-slate-50 dark:bg-slate-950 dark:text-slate-300 border-b border-slate-200 dark:border-slate-800">
                    <tr>
                        <th scope="col" class="h-12 px-4 font-medium align-middle"># Orden</th>
                        <th scope="col" class="h-12 px-4 font-medium align-middle">Producto</th>
                        <th scope="col" class="h-12 px-4 font-medium align-middle">Regalo para</th>
                        <th scope="col" class="h-12 px-4 font-medium align-middle">Monto</th>
                        <th scope="col" class="h-12 px-4 font-medium align-middle">Estado</th>
                        <th scope="col" class="h-12 px-4 font-medium align-middle">Fecha</th>
                        <th scope="col" class="h-12 px-4 font-medium align-middle text-right">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-slate-800 text-slate-900 dark:text-slate-100">
                    @forelse($orders as $order)
                        <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/50 transition-colors">
                            <td class="p-4 font-medium">{{ $order->order_number }}</td>
                            <td class="p-4">{{ $order->product->name ?? 'Producto Eliminado' }}</td>
                            <td class="p-4">
                                @if(isset($order->target->username))
                                    <span class="inline-flex items-center px-2 py-1 rounded-md bg-slate-100 dark:bg-slate-800 text-xs font-medium">
                                        {{ $order->target->username }}
                                    </span>
                                @else
                                    <span class="text-slate-400">-</span>
                                @endif
                            </td>
                            <td class="p-4 font-semibold">S/ {{ number_format($order->amount_paid, 2) }}</td>
                            <td class="p-4">
                                @php
                                    $rawStatus = strtolower($order->status->value ?? $order->status);
                                    
                                    $statusConfig = [
                                        'pending'  => ['label' => 'Pendiente', 'classes' => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900/30 dark:text-yellow-400 border border-yellow-200 dark:border-yellow-900'],
                                        'approved' => ['label' => 'Aprobado', 'classes' => 'bg-green-100 text-green-800 dark:bg-green-900/30 dark:text-green-400 border border-green-200 dark:border-green-900'],
                                        'rejected' => ['label' => 'Rechazado', 'classes' => 'bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-400 border border-red-200 dark:border-red-900'],
                                    ];

                                    $config = $statusConfig[$rawStatus] ?? ['label' => ucfirst($rawStatus), 'classes' => 'bg-slate-100 text-slate-800 dark:bg-slate-800 dark:text-slate-300 border border-slate-200 dark:border-slate-700'];
                                @endphp
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold {{ $config['classes'] }}">
                                    {{ $config['label'] }}
                                </span>
                            </td>
                            <td class="p-4">{{ $order->created_at->format('d/m/Y') }}</td>
                            <td class="p-4 text-right">
                                @if(isset($order->receipt_image))
                                    <a href="{{ Storage::url($order->receipt_image) }}" 
                                        target="_blank"
                                        class="inline-flex items-center px-3 py-1 text-xs font-medium text-blue-700 bg-blue-100 rounded-md hover:bg-blue-200 dark:bg-blue-900 dark:text-blue-300 dark:hover:bg-blue-800 transition">
                                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        Evidencia
                                    </a>
                                @else
                                    <span class="text-xs text-slate-400">Sin evidencia</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="p-8 text-center text-slate-500 dark:text-slate-400">
                                <div class="flex flex-col items-center justify-center">
                                    <svg class="w-8 h-8 mb-3 text-slate-400 dark:text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                                    <p>No has registrado ningún pago todavía.</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    @if($orders->hasPages())
        <div class="mt-4">
            {{ $orders->links() }}
        </div>
    @endif
</div>
@endsection