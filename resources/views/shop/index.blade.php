@extends('layouts.panel', ['title' => 'Tienda', 'header_title' => 'Tienda del Servidor'])

@section('content')
<div class="space-y-12 text-slate-900 dark:text-slate-50">
    
    <div>
        <h2 class="text-2xl font-semibold tracking-tight mb-6">Rangos</h2>
        @if($rangos->isEmpty())
            <p class="text-slate-500 dark:text-slate-400 text-sm">No hay rangos disponibles.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($rangos as $rango)
                    <div class="flex flex-col justify-between border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-6 rounded-xl shadow-sm transition-all hover:shadow-md">
                        <div>
                            <h3 class="text-lg font-semibold tracking-tight text-blue-600 dark:text-blue-400">{{ $rango->name }}</h3>
                            <div class="mt-2 mb-6 text-slate-900 dark:text-white">
                                <span class="text-3xl font-bold">S/ {{ number_format($rango->price, 2) }}</span>
                                <span class="text-sm text-slate-500 dark:text-slate-400">/ único</span>
                            </div>
                        </div>
                        <a href="{{ route('orders.create', ['product_id' => $rango->id, 'amount' => $rango->price]) }}" 
                           class="inline-flex items-center justify-center rounded-md text-sm font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 bg-blue-600 text-white hover:bg-blue-700 shadow-md hover:shadow-lg h-10 px-4 py-2 w-full">
                            Comprar Rango
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <div>
        <h2 class="text-2xl font-semibold tracking-tight mb-6">Eventos Activos</h2>
        @if($eventos->isEmpty())
            <p class="text-slate-500 dark:text-slate-400 text-sm">No hay eventos disponibles en este momento.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($eventos as $evento)
                    <div class="flex flex-col justify-between border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-6 rounded-xl shadow-sm transition-all hover:shadow-md">
                        <div>
                            <h3 class="text-lg font-semibold tracking-tight">{{ $evento->name }}</h3>
                            <div class="mt-2 mb-6 text-slate-900 dark:text-white">
                                <span class="text-3xl font-bold">S/ {{ number_format($evento->price, 2) }}</span>
                            </div>
                        </div>
                        <a href="{{ route('orders.create', ['product_id' => $evento->id, 'amount' => $evento->price]) }}" 
                           class="inline-flex items-center justify-center rounded-md text-sm font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 bg-blue-600 text-white hover:bg-blue-700 shadow-md hover:shadow-lg h-10 px-4 py-2 w-full">
                            Adquirir Ticket
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <div>
        <h2 class="text-2xl font-semibold tracking-tight mb-6">Ítems Especiales</h2>
        @if($items->isEmpty())
            <p class="text-slate-500 dark:text-slate-400 text-sm">No hay ítems en la tienda actualmente.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($items as $item)
                    <div class="flex flex-col justify-between border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-6 rounded-xl shadow-sm transition-all hover:shadow-md">
                        <div>
                            <h3 class="text-lg font-semibold tracking-tight text-blue-600 dark:text-blue-400">{{ $item->name }}</h3>
                            <div class="mt-2 mb-6 text-slate-900 dark:text-white">
                                <span class="text-3xl font-bold">S/ {{ number_format($item->price, 2) }}</span>
                            </div>
                        </div>
                        <a href="{{ route('orders.create', ['product_id' => $item->id, 'amount' => $item->price]) }}" 
                           class="inline-flex items-center justify-center rounded-md text-sm font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 bg-blue-600 text-white hover:bg-blue-700 shadow-md hover:shadow-lg h-10 px-4 py-2 w-full">
                            Comprar Ítem
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

</div>
@endsection