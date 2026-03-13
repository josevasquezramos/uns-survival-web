@extends('layouts.panel', ['title' => 'Nuevo Pago', 'header_title' => 'Registrar Comprobante'])

@section('content')
<link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>

<style>
    .ts-control { 
        border-radius: 0.5rem;
        border: 1px solid #e2e8f0;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        padding: 0.5rem 0.75rem; 
        min-height: 2.5rem; 
        cursor: pointer;
        background-color: #ffffff;
        font-size: 0.875rem;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='%2364748b'%3e%3cpath stroke-linecap='round' stroke-linejoin='round' d='M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9' /%3e%3c/svg%3e");
        background-position: right 0.5rem center;
        background-repeat: no-repeat;
        background-size: 1.25rem;
        padding-right: 2.5rem !important;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }
    .dark .ts-control { 
        background-color: rgba(255, 255, 255, 0.05); 
        color: #f8fafc; 
        border-color: rgba(255, 255, 255, 0.1); 
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='%2394a3b8'%3e%3cpath stroke-linecap='round' stroke-linejoin='round' d='M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9' /%3e%3c/svg%3e");
    }
    .ts-control.focus { 
        border-color: #3b82f6;
        box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2); 
    } 
    .dark .ts-control.focus { 
        border-color: #3b82f6; 
        box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2); 
    }
    
    .ts-dropdown { 
        border-radius: 0.5rem;
        border: 1px solid #e2e8f0;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); /* shadow-lg */
        margin-top: 0.35rem; 
        background-color: #ffffff;
        overflow: hidden;
        font-size: 0.875rem;
    }
    .dark .ts-dropdown { 
        background-color: #1e293b;
        color: #f8fafc; 
        border-color: rgba(255, 255, 255, 0.1); 
    }
    
    .ts-dropdown .dropdown-input-wrap { 
        padding: 0.5rem; 
        border-bottom: 1px solid #e2e8f0;
    }
    .dark .ts-dropdown .dropdown-input-wrap { border-bottom-color: rgba(255, 255, 255, 0.1); }
    
    .ts-dropdown .dropdown-input { 
        border: 1px solid #e2e8f0; 
        border-radius: 0.375rem; 
        padding: 0.375rem 0.75rem; 
        width: 100%; 
        outline: none; 
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        transition: all 0.15s ease-in-out;
    }
    .ts-dropdown .dropdown-input:focus { border-color: #3b82f6; box-shadow: 0 0 0 1px #3b82f6; }
    .dark .ts-dropdown .dropdown-input { background-color: rgba(0,0,0,0.2); border-color: rgba(255, 255, 255, 0.1); color: white; }
    
    .ts-dropdown .option { padding: 0.5rem 0.75rem; cursor: pointer; transition: background-color 0.1s; }
    .ts-dropdown .option.active, .ts-dropdown .option:hover { background-color: #f1f5f9; color: #0f172a; }
    .dark .ts-dropdown .option.active, .dark .ts-dropdown .option:hover { background-color: rgba(255, 255, 255, 0.05); color: #f8fafc; }
</style>

<div class="max-w-2xl mx-auto">
    
    <div class="mb-6 flex justify-end">
        <button type="button" id="openQrModal" class="cursor-pointer inline-flex items-center justify-center rounded-lg text-sm font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700 text-slate-900 dark:text-slate-50 h-10 px-4 py-2 shadow-sm hover:shadow-md">
            <svg class="w-4 h-4 mr-2 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path></svg>
            Ver QR de Pago
        </button>
    </div>

    <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 p-8 rounded-xl shadow-sm text-slate-900 dark:text-slate-50">
        
        @if ($errors->any())
            <div class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-900/50 p-4 rounded-lg mb-6">
                <ul class="text-sm text-red-600 dark:text-red-400 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label for="product_id" class="block text-sm font-medium mb-2">Producto a adquirir</label>
                <select name="product_id" id="product_id" placeholder="Buscar producto..." required>
                    <option value=""></option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" 
                                data-tipo="{{ $product->type->value }}" 
                                data-precio="{{ $product->price }}"
                                {{ $selectedProductId == $product->id ? 'selected' : '' }}>
                            {{ $product->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div id="contenedor_regalo" class="transition-all duration-300">
                <label for="target_username" class="block text-sm font-medium mb-2">Regalar a (Opcional)</label>
                <select name="target_username" id="target_username" placeholder="Buscar o escribir usuario...">
                    <option value="">-- Es para mi propia cuenta --</option>
                    @foreach($users as $user)
                        <option value="{{ $user->username }}">{{ $user->username }}</option>
                    @endforeach
                </select>
                <p class="text-[0.85rem] mt-1.5 text-slate-500 dark:text-slate-400">Busca el nombre exacto de tu amigo en el servidor.</p>
            </div>

            <div>
                <label for="amount_paid" class="block text-sm font-medium mb-2">Monto Pagado (S/)</label>
                <input type="number" step="0.01" name="amount_paid" id="amount_paid" value="{{ old('amount_paid', $selectedAmount) }}" required 
                    class="flex h-10 w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 px-3 py-2 text-sm shadow-sm ring-offset-white dark:ring-offset-slate-950 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 transition-colors" 
                    placeholder="Ej: 5.00">
            </div>

            <div>
                <label for="payment_datetime" class="block text-sm font-medium mb-2">Fecha y Hora exacta del pago</label>
                <input type="datetime-local" name="payment_datetime" id="payment_datetime" required 
                    class="flex h-10 w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 px-3 py-2 text-sm shadow-sm ring-offset-white dark:ring-offset-slate-950 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 transition-colors cursor-pointer [color-scheme:light] dark:[color-scheme:dark]">
                <p class="text-[0.85rem] mt-1.5 text-slate-500 dark:text-slate-400">Copia exactamente la fecha y hora que aparece en tu operación.</p>
            </div>

            <div>
                <label for="receipt_image" class="block text-sm font-medium mb-2">Evidencia del pago (Captura)</label>
                <input type="file" name="receipt_image" id="receipt_image" accept="image/*" required 
                    class="flex h-10 w-full rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 px-3 py-2 text-sm shadow-sm file:border-0 file:bg-transparent file:text-sm file:font-semibold placeholder:text-slate-500 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 disabled:cursor-not-allowed disabled:opacity-50 cursor-pointer transition-colors">
            </div>

            <div class="pt-4">
                <button type="submit" class="cursor-pointer inline-flex items-center justify-center rounded-lg text-sm font-semibold transition-all duration-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 bg-blue-600 text-white hover:bg-blue-700 shadow-sm hover:shadow-md h-11 px-4 py-2 w-full">
                    Enviar Comprobante
                </button>
            </div>
        </form>
    </div>
</div>

<div id="qrModal" class="fixed inset-0 z-50 flex items-center justify-center bg-slate-900/50 dark:bg-black/60 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300">
    <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-6 shadow-xl max-w-sm w-full mx-4 transform scale-95 transition-transform duration-300" id="qrModalContent">
        <div class="flex justify-between items-center mb-5 text-slate-900 dark:text-slate-50">
            <h3 class="text-lg font-bold tracking-tight">Escanea para pagar</h3>
            <button id="closeQrModal" class="cursor-pointer text-slate-400 hover:text-slate-900 dark:hover:text-slate-100 transition-colors focus:outline-none bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 rounded-full p-1.5">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
        <div class="flex justify-center bg-white dark:bg-slate-950 p-4 rounded-xl border border-slate-200 dark:border-slate-800 shadow-inner">
            <img src="{{ asset('images/qr.png') }}" alt="Código QR de Pago" class="w-48 h-48 object-contain">
        </div>
        <p class="text-center text-sm font-medium text-slate-500 dark:text-slate-400 mt-5">
            Escanea con yape o plin.
        </p>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        const modal = document.getElementById('qrModal');
        const modalContent = document.getElementById('qrModalContent');
        const btnOpen = document.getElementById('openQrModal');
        const btnClose = document.getElementById('closeQrModal');

        function openModal() {
            modal.classList.remove('opacity-0', 'pointer-events-none');
            modalContent.classList.remove('scale-95');
        }

        function closeModal() {
            modal.classList.add('opacity-0', 'pointer-events-none');
            modalContent.classList.add('scale-95');
        }

        btnOpen.addEventListener('click', openModal);
        btnClose.addEventListener('click', closeModal);
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModal(); 
        });

        let targetSelect = new TomSelect("#target_username", {
            valueField: 'username',
            labelField: 'username',
            searchField: 'username',
            plugins: ['dropdown_input'],
            create: true, 
            load: function(query, callback) {
                if (!query.length) return callback();
                fetch(`/api/users/search?q=${encodeURIComponent(query)}`)
                    .then(response => response.json())
                    .then(json => callback(json))
                    .catch(()=> callback());
            }
        });

        const productSelectEl = document.getElementById('product_id');
        let productSelect = new TomSelect("#product_id", {
            plugins: ['dropdown_input'],
            create: false,
            onChange: function() { actualizarFormulario(); }
        });

        const amountInput = document.getElementById('amount_paid');
        const contenedorRegalo = document.getElementById('contenedor_regalo');

        function actualizarFormulario() {
            const opcionSeleccionada = productSelectEl.options[productSelectEl.selectedIndex];
            if(!opcionSeleccionada) return;

            const tipo = opcionSeleccionada.getAttribute('data-tipo');
            const precio = parseFloat(opcionSeleccionada.getAttribute('data-precio'));
            
            if (tipo === 'donacion') {
                contenedorRegalo.style.display = 'none';
                if(targetSelect) targetSelect.clear(); 
            } else {
                contenedorRegalo.style.display = 'block';
            }

            if (precio > 0) {
                amountInput.value = precio.toFixed(2);
                amountInput.readOnly = true;
                amountInput.classList.add('bg-slate-100', 'dark:bg-slate-900', 'text-slate-500', 'cursor-not-allowed');
            } else {
                amountInput.value = ''; 
                amountInput.readOnly = false;
                amountInput.classList.remove('bg-slate-100', 'dark:bg-slate-900', 'text-slate-500', 'cursor-not-allowed');
            }
        }

        actualizarFormulario();
    });
</script>
@endsection