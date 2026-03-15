@extends('layouts.panel', ['title' => 'Tienda', 'header_title' => 'Tienda del Servidor'])

@section('content')
    <div class="text-slate-900 dark:text-slate-50 pb-12">

        {{-- SECCIÓN DE RANGOS --}}
        <div class="pt-10 pb-4">
            <div class="text-center mb-18">
                <h2 class="text-3xl font-bold tracking-tight mb-3">Membresías</h2>
                <p class="text-slate-500 dark:text-slate-400 max-w-xl mx-auto">Obtén acceso a herramientas, límites
                    ampliados y ventajas económicas que los jugadores normales no tienen. Duración de 1 mes.</p>
            </div>

            @if($rangos->isEmpty())
                <p class="text-slate-500 dark:text-slate-400 text-sm text-center">No hay rangos disponibles.</p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto relative">
                    @foreach($rangos as $rango)
                        @php
                            $isBachiller = str_contains(strtolower($rango->name), 'bachiller');
                            $isEgresado = str_contains(strtolower($rango->name), 'egresado');
                            $isDoctor = str_contains(strtolower($rango->name), 'doctor');

                            $borderColor = $isDoctor ? 'border-amber-500' : ($isBachiller ? 'border-blue-500' : 'border-emerald-500');
                            $bgColor = $isDoctor ? 'bg-amber-500' : ($isBachiller ? 'bg-blue-500' : 'bg-emerald-500');
                            $bgHover = $isDoctor ? 'hover:bg-amber-600' : ($isBachiller ? 'hover:bg-blue-600' : 'hover:bg-emerald-600');
                            $textColor = $isDoctor ? 'text-amber-600 dark:text-amber-400' : ($isBachiller ? 'text-blue-600 dark:text-blue-400' : 'text-emerald-600 dark:text-emerald-400');
                            $badgeBg = $isDoctor ? 'bg-amber-500' : ($isBachiller ? 'bg-blue-600' : 'bg-emerald-600');
                            $badgeLabel = $isDoctor ? 'Top Tier' : ($isBachiller ? 'Mas Popular' : 'Ideal para Empezar');
                        @endphp

                        <div
                            class="relative flex flex-col justify-between border-2 {{ $isBachiller ? $borderColor . ' md:scale-105 z-10' : 'border-slate-200 dark:border-slate-800' }} bg-white dark:bg-slate-900 rounded-2xl transition-all duration-300 p-8 mb-4 md:mb-0">

                            <div class="absolute -top-4 left-1/2 -translate-x-1/2 whitespace-nowrap">
                                <span
                                    class="{{ $badgeBg }} text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                                    {{ $badgeLabel }}
                                </span>
                            </div>

                            <div>
                                <h3 class="text-2xl font-bold tracking-tight {{ $textColor }} text-center mt-2">
                                    {{ str_replace('Temporal', '', $rango->name) }}</h3>
                                <div class="text-center mt-4 mb-8 text-slate-900 dark:text-white">
                                    <span class="text-4xl font-extrabold">S/ {{ number_format($rango->price, 2) }}</span>
                                    <span class="text-slate-500 text-sm">/mes</span>
                                </div>

                                {{-- Beneficios en lenguaje coloquial, sin comandos visibles, sin emojis --}}
                                <ul class="space-y-3 text-sm text-slate-600 dark:text-slate-300 mb-8">

                                    @if($isEgresado)
                                        <li class="flex items-start gap-2">
                                            <x-heroicon-o-home class="w-4 h-4 mt-0.5 shrink-0 {{ $textColor }}" />
                                            <span>Guarda hasta <strong>7 puntos de regreso</strong> en el mapa y protege <strong>6
                                                    zonas</strong> de tu construcción.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <x-heroicon-o-building-storefront class="w-4 h-4 mt-0.5 shrink-0 {{ $textColor }}" />
                                            <span>Vende hasta <strong>10 artículos a la vez</strong> en la Casa de Subastas.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <x-heroicon-o-briefcase class="w-4 h-4 mt-0.5 shrink-0 {{ $textColor }}" />
                                            <span>Activa hasta <strong>4 trabajos al mismo tiempo</strong> y gana un <strong>10%
                                                    extra</strong> en dinero, experiencia y puntos.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <x-heroicon-o-wrench-screwdriver class="w-4 h-4 mt-0.5 shrink-0 {{ $textColor }}" />
                                            <span>Abre una <strong>mesa de crafteo</strong> desde donde estés, sin necesitar tener una
                                                cerca.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <x-heroicon-o-user class="w-4 h-4 mt-0.5 shrink-0 {{ $textColor }}" />
                                            <span>Pon cualquier bloque de tu mano como <strong>sombrero</strong> para un toque
                                                cosmético.</span>
                                        </li>
                                    @elseif($isBachiller)
                                        <li class="flex items-start gap-2">
                                            <x-heroicon-o-home class="w-4 h-4 mt-0.5 shrink-0 {{ $textColor }}" />
                                            <span>Guarda hasta <strong>15 puntos de regreso</strong>, protege <strong>8 zonas</strong> y
                                                vende <strong>20 artículos a la vez</strong> en subastas.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <x-heroicon-o-briefcase class="w-4 h-4 mt-0.5 shrink-0 {{ $textColor }}" />
                                            <span>Hasta <strong>6 trabajos activos</strong> con un <strong>25% extra</strong> en todo lo
                                                que ganes.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <x-heroicon-o-arrow-uturn-left class="w-4 h-4 mt-0.5 shrink-0 {{ $textColor }}" />
                                            <span>Vuelve al lugar donde moriste o al punto desde el que te teletransportaste, cuando
                                                quieras.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <x-heroicon-o-sparkles class="w-4 h-4 mt-0.5 shrink-0 {{ $textColor }}" />
                                            <span>Viaja a un lugar aleatorio del mapa <strong>sin ningún tiempo de
                                                    espera</strong>.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <x-heroicon-o-archive-box class="w-4 h-4 mt-0.5 shrink-0 {{ $textColor }}" />
                                            <span>Accede a tu <strong>cofre de ender</strong> desde cualquier parte, sin necesitarlo
                                                cerca.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <x-heroicon-o-trash class="w-4 h-4 mt-0.5 shrink-0 {{ $textColor }}" />
                                            <span>Bota artículos que no sirven con un <strong>basurero virtual</strong> y compacta
                                                minerales en bloques al instante.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <x-heroicon-o-sun class="w-4 h-4 mt-0.5 shrink-0 {{ $textColor }}" />
                                            <span>Cambia la <strong>hora y el clima que ves en tu pantalla</strong>, sin afectar al
                                                resto del servidor.</span>
                                        </li>
                                    @elseif($isDoctor)
                                        <li class="flex items-start gap-2">
                                            <x-heroicon-o-home class="w-4 h-4 mt-0.5 shrink-0 {{ $textColor }}" />
                                            <span>Hasta <strong>30 puntos de regreso</strong>, <strong>10 zonas protegidas</strong> y
                                                <strong>35 artículos en subastas</strong> al mismo tiempo.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <x-heroicon-o-briefcase class="w-4 h-4 mt-0.5 shrink-0 {{ $textColor }}" />
                                            <span>Hasta <strong>9 trabajos activos</strong> con un <strong>50% extra</strong> en dinero,
                                                experiencia y puntos.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <x-heroicon-o-paper-airplane class="w-4 h-4 mt-0.5 shrink-0 {{ $textColor }}" />
                                            <span><strong>Vuela libremente</strong> dentro del Lobby y en tus zonas protegidas.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <x-heroicon-o-heart class="w-4 h-4 mt-0.5 shrink-0 {{ $textColor }}" />
                                            <span>Recupera tu <strong>salud y hambre al instante</strong> cuando lo necesites.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <x-heroicon-o-wrench-screwdriver class="w-4 h-4 mt-0.5 shrink-0 {{ $textColor }}" />
                                            <span><strong>Repara tus herramientas y armaduras</strong> desgastadas sin gastar materiales
                                                en el yunque.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <x-heroicon-o-signal class="w-4 h-4 mt-0.5 shrink-0 {{ $textColor }}" />
                                            <span>Detecta <strong>qué jugadores están cerca</strong> de ti y consulta cuándo se conectó
                                                por última vez cualquier persona.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <x-heroicon-o-camera class="w-4 h-4 mt-0.5 shrink-0 {{ $textColor }}" />
                                            <span>Obtén e invoca la <strong>cabeza personalizada</strong> de cualquier jugador para
                                                decoración o colección.</span>
                                        </li>
                                    @endif
                                </ul>
                            </div>

                            <div class="space-y-3">
                                <button type="button" onclick="openModal('modal-{{ $rango->id }}')"
                                    class="w-full cursor-pointer text-sm font-semibold {{ $textColor }} border border-current rounded-xl h-11 transition-all duration-200 hover:bg-slate-50 dark:hover:bg-slate-800 active:scale-95 flex items-center justify-center gap-2">
                                    <x-heroicon-o-information-circle class="w-4 h-4" />
                                    Ver detalles y comandos
                                </button>

                                <a href="{{ route('orders.create', ['product_id' => $rango->id, 'amount' => $rango->price]) }}"
                                    class="flex items-center justify-center gap-2 rounded-xl text-sm font-bold transition-all duration-200 {{ $bgColor }} text-white {{ $bgHover }} active:scale-95 h-12 w-full cursor-pointer">
                                    <x-heroicon-o-shopping-cart class="w-4 h-4" />
                                    Comprar Ahora
                                </a>
                            </div>
                        </div>

                        {{-- MODAL DETALLADO --}}
                        <div id="modal-{{ $rango->id }}"
                            class="fixed inset-0 z-50 flex items-center justify-center hidden opacity-0 transition-opacity duration-300">
                            <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm cursor-pointer"
                                onclick="closeModal('modal-{{ $rango->id }}')"></div>
                            <div
                                class="relative bg-white dark:bg-slate-900 w-full max-w-2xl mx-4 rounded-2xl transform scale-95 transition-transform duration-300 overflow-y-auto max-h-[92vh] border border-slate-200 dark:border-slate-700">

                                <div
                                    class="sticky top-0 z-10 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-700 px-6 pt-6 pb-4 rounded-t-2xl flex justify-between items-start">
                                    <div>
                                        <span class="text-xs font-semibold uppercase tracking-widest">Membresia</span>
                                        <h3 class="text-2xl font-bold {{ $textColor }} leading-tight mt-0.5">
                                            {{ str_replace('Temporal', '', $rango->name) }}</h3>
                                    </div>
                                    <button type="button" onclick="closeModal('modal-{{ $rango->id }}')"
                                        class="cursor-pointer text-slate-400 hover:text-slate-700 dark:hover:text-slate-200 p-1.5 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition ml-4 shrink-0">
                                        <x-heroicon-o-x-mark class="w-5 h-5" />
                                    </button>
                                </div>

                                <div class="px-6 py-5 space-y-7 text-sm text-slate-700 dark:text-slate-300">

                                    <div class="bg-slate-50 dark:bg-slate-800/60 p-4 rounded-xl border-l-4 {{ $borderColor }}">
                                        <p class="font-semibold text-slate-800 dark:text-white mb-1">Comparativa vs. jugador sin
                                            rango</p>
                                        <p class="text-sm">Un jugador base tiene solo <strong>3 homes</strong>, <strong>4
                                                protecciones</strong>, puede tener <strong>3 trabajos activos</strong> y no recibe
                                            ningun porcentaje de bonus. Con esta membresia lo superas desde el primer dia.</p>
                                    </div>

                                    @if($isEgresado)

                                        <div>
                                            <h4 class="font-bold text-slate-900 dark:text-white flex items-center gap-2 mb-3">
                                                <x-heroicon-o-chart-bar class="w-4 h-4 {{ $textColor }}" />
                                                Limites y capacidades
                                            </h4>
                                            <div class="grid grid-cols-3 gap-3 text-center">
                                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-3">
                                                    <div class="text-2xl font-extrabold {{ $textColor }}">7</div>
                                                    <div class="text-xs text-slate-500 mt-1">Homes</div>
                                                    <div class="text-xs text-slate-400 mt-0.5">Puntos de regreso guardados</div>
                                                </div>
                                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-3">
                                                    <div class="text-2xl font-extrabold {{ $textColor }}">6</div>
                                                    <div class="text-xs text-slate-500 mt-1">Protecciones</div>
                                                    <div class="text-xs text-slate-400 mt-0.5">Zonas de terreno protegido</div>
                                                </div>
                                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-3">
                                                    <div class="text-2xl font-extrabold {{ $textColor }}">10</div>
                                                    <div class="text-xs text-slate-500 mt-1">Subastas</div>
                                                    <div class="text-xs text-slate-400 mt-0.5">Articulos en venta a la vez</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <h4 class="font-bold text-slate-900 dark:text-white flex items-center gap-2 mb-3">
                                                <x-heroicon-o-briefcase class="w-4 h-4 {{ $textColor }}" />
                                                Trabajos y economia
                                            </h4>
                                            <div class="grid grid-cols-2 gap-3 text-center mb-3">
                                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-3">
                                                    <div class="text-2xl font-extrabold {{ $textColor }}">4</div>
                                                    <div class="text-xs text-slate-500 mt-1">Trabajos activos a la vez</div>
                                                </div>
                                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-3">
                                                    <div class="text-2xl font-extrabold {{ $textColor }}">+10%</div>
                                                    <div class="text-xs text-slate-500 mt-1">Extra en dinero, XP y puntos</div>
                                                </div>
                                            </div>
                                            <p class="text-xs text-slate-400 dark:text-slate-500 pl-1">El bonus del 10% se aplica sobre
                                                cada ganancia de cada trabajo activo, siempre, de forma automatica.</p>
                                        </div>

                                        <div>
                                            <h4 class="font-bold text-slate-900 dark:text-white flex items-center gap-2 mb-3">
                                                <x-heroicon-o-wrench-screwdriver class="w-4 h-4 {{ $textColor }}" />
                                                Herramientas y comodidades
                                            </h4>
                                            <div class="space-y-3">
                                                <div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                                                    <p class="font-semibold text-slate-800 dark:text-white text-xs mb-1">Mesa de crafteo
                                                        virtual <code
                                                            class="bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 px-1.5 py-0.5 rounded text-xs font-mono">/workbench</code>
                                                        <code
                                                            class="bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 px-1.5 py-0.5 rounded text-xs font-mono">/craft</code>
                                                    </p>
                                                    <p class="text-xs text-slate-500">Abre una mesa de crafteo desde cualquier punto del
                                                        mapa, sin necesitar tener una fisica cerca.</p>
                                                </div>
                                                <div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                                                    <p class="font-semibold text-slate-800 dark:text-white text-xs mb-1">Sombrero
                                                        virtual <code
                                                            class="bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 px-1.5 py-0.5 rounded text-xs font-mono">/hat</code>
                                                    </p>
                                                    <p class="text-xs text-slate-500">Pon el bloque o item que tengas en mano como
                                                        sombrero en tu cabeza. Puramente cosmético, sin costo adicional.</p>
                                                </div>
                                            </div>
                                        </div>

                                    @elseif($isBachiller)

                                        <div
                                            class="flex items-start gap-2 p-3 bg-blue-50 dark:bg-blue-900/20 rounded-xl border border-blue-200 dark:border-blue-800 text-xs text-blue-700 dark:text-blue-300">
                                            <x-heroicon-o-check-circle class="w-4 h-4 text-blue-500 shrink-0 mt-0.5" />
                                            <p><strong>Incluye absolutamente todo lo del rango Egresado</strong>, con los limites y
                                                bonuses mejorados que ves a continuacion.</p>
                                        </div>

                                        <div>
                                            <h4 class="font-bold text-slate-900 dark:text-white flex items-center gap-2 mb-3">
                                                <x-heroicon-o-chart-bar class="w-4 h-4 {{ $textColor }}" />
                                                Limites y capacidades
                                            </h4>
                                            <div class="grid grid-cols-3 gap-3 text-center">
                                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-3">
                                                    <div class="text-2xl font-extrabold {{ $textColor }}">15</div>
                                                    <div class="text-xs text-slate-500 mt-1">Homes</div>
                                                </div>
                                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-3">
                                                    <div class="text-2xl font-extrabold {{ $textColor }}">8</div>
                                                    <div class="text-xs text-slate-500 mt-1">Protecciones</div>
                                                </div>
                                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-3">
                                                    <div class="text-2xl font-extrabold {{ $textColor }}">20</div>
                                                    <div class="text-xs text-slate-500 mt-1">Subastas simultaneas</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <h4 class="font-bold text-slate-900 dark:text-white flex items-center gap-2 mb-3">
                                                <x-heroicon-o-briefcase class="w-4 h-4 {{ $textColor }}" />
                                                Trabajos y economia
                                            </h4>
                                            <div class="grid grid-cols-2 gap-3 text-center">
                                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-3">
                                                    <div class="text-2xl font-extrabold {{ $textColor }}">6</div>
                                                    <div class="text-xs text-slate-500 mt-1">Trabajos activos a la vez</div>
                                                </div>
                                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-3">
                                                    <div class="text-2xl font-extrabold {{ $textColor }}">+25%</div>
                                                    <div class="text-xs text-slate-500 mt-1">Extra en dinero, XP y puntos</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <h4 class="font-bold text-slate-900 dark:text-white flex items-center gap-2 mb-3">
                                                <x-heroicon-o-bolt class="w-4 h-4 {{ $textColor }}" />
                                                Movilidad y teletransporte
                                            </h4>
                                            <div class="space-y-3">
                                                <div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                                                    <p class="font-semibold text-slate-800 dark:text-white text-xs mb-1">Regreso al
                                                        punto anterior <code
                                                            class="bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 px-1.5 py-0.5 rounded text-xs font-mono">/back</code>
                                                    </p>
                                                    <p class="text-xs text-slate-500">Vuelve instantaneamente al lugar donde moriste o
                                                        al sitio desde el que te teletransportaste. Esencial para no perder tu equipo.
                                                    </p>
                                                </div>
                                                <div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                                                    <p class="font-semibold text-slate-800 dark:text-white text-xs mb-1">Teletransporte
                                                        aleatorio sin espera <code
                                                            class="bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 px-1.5 py-0.5 rounded text-xs font-mono">/rtp</code>
                                                    </p>
                                                    <p class="text-xs text-slate-500">Viaja a un lugar aleatorio del mapa cuando
                                                        quieras, sin tiempo de espera ni cooldown. Perfecto para explorar o buscar
                                                        recursos sin explotar.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <h4 class="font-bold text-slate-900 dark:text-white flex items-center gap-2 mb-3">
                                                <x-heroicon-o-squares-2x2 class="w-4 h-4 {{ $textColor }}" />
                                                Utilidades y comodidades
                                            </h4>
                                            <div class="space-y-3">
                                                <div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                                                    <p class="font-semibold text-slate-800 dark:text-white text-xs mb-1">Cofre de ender
                                                        remoto <code
                                                            class="bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 px-1.5 py-0.5 rounded text-xs font-mono">/enderchest</code>
                                                    </p>
                                                    <p class="text-xs text-slate-500">Accede a tu cofre de ender desde cualquier parte
                                                        del mapa, sin tener uno fisico cerca.</p>
                                                </div>
                                                <div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                                                    <p class="font-semibold text-slate-800 dark:text-white text-xs mb-1">Basurero
                                                        virtual <code
                                                            class="bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 px-1.5 py-0.5 rounded text-xs font-mono">/trash</code>
                                                        <code
                                                            class="bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 px-1.5 py-0.5 rounded text-xs font-mono">/disposal</code>
                                                    </p>
                                                    <p class="text-xs text-slate-500">Elimina objetos que no necesitas sin tirarlos al
                                                        suelo.</p>
                                                </div>
                                                <div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                                                    <p class="font-semibold text-slate-800 dark:text-white text-xs mb-1">Condensar
                                                        minerales en bloques <code
                                                            class="bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 px-1.5 py-0.5 rounded text-xs font-mono">/condense</code>
                                                    </p>
                                                    <p class="text-xs text-slate-500">Convierte automaticamente tus pilas de minerales o
                                                        items en sus bloques equivalentes con un solo comando.</p>
                                                </div>
                                                <div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                                                    <p class="font-semibold text-slate-800 dark:text-white text-xs mb-1">Hora y clima
                                                        personal <code
                                                            class="bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 px-1.5 py-0.5 rounded text-xs font-mono">/ptime</code>
                                                        <code
                                                            class="bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 px-1.5 py-0.5 rounded text-xs font-mono">/pweather</code>
                                                    </p>
                                                    <p class="text-xs text-slate-500">Cambia la hora del dia y el clima que ves en tu
                                                        pantalla sin afectar al resto del servidor.</p>
                                                </div>
                                            </div>
                                        </div>

                                    @elseif($isDoctor)

                                        <div
                                            class="flex items-start gap-2 p-3 bg-amber-50 dark:bg-amber-900/20 rounded-xl border border-amber-200 dark:border-amber-800 text-xs text-amber-700 dark:text-amber-300">
                                            <x-heroicon-o-check-circle class="w-4 h-4 text-amber-500 shrink-0 mt-0.5" />
                                            <p><strong>Incluye absolutamente todo lo de Egresado y Bachiller</strong>, con los maximos
                                                del servidor.</p>
                                        </div>

                                        <div>
                                            <h4 class="font-bold text-slate-900 dark:text-white flex items-center gap-2 mb-3">
                                                <x-heroicon-o-chart-bar class="w-4 h-4 {{ $textColor }}" />
                                                Limites maximos
                                            </h4>
                                            <div class="grid grid-cols-3 gap-3 text-center">
                                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-3">
                                                    <div class="text-2xl font-extrabold {{ $textColor }}">30</div>
                                                    <div class="text-xs text-slate-500 mt-1">Homes</div>
                                                </div>
                                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-3">
                                                    <div class="text-2xl font-extrabold {{ $textColor }}">10</div>
                                                    <div class="text-xs text-slate-500 mt-1">Protecciones</div>
                                                </div>
                                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-3">
                                                    <div class="text-2xl font-extrabold {{ $textColor }}">35</div>
                                                    <div class="text-xs text-slate-500 mt-1">Subastas simultaneas</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <h4 class="font-bold text-slate-900 dark:text-white flex items-center gap-2 mb-3">
                                                <x-heroicon-o-briefcase class="w-4 h-4 {{ $textColor }}" />
                                                Trabajos y economia
                                            </h4>
                                            <div class="grid grid-cols-2 gap-3 text-center">
                                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-3">
                                                    <div class="text-2xl font-extrabold {{ $textColor }}">9</div>
                                                    <div class="text-xs text-slate-500 mt-1">Trabajos activos a la vez</div>
                                                </div>
                                                <div class="bg-slate-50 dark:bg-slate-800/50 rounded-xl p-3">
                                                    <div class="text-2xl font-extrabold {{ $textColor }}">+50%</div>
                                                    <div class="text-xs text-slate-500 mt-1">Extra en dinero, XP y puntos</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <h4 class="font-bold text-slate-900 dark:text-white flex items-center gap-2 mb-3">
                                                <x-heroicon-o-shield-check class="w-4 h-4 {{ $textColor }}" />
                                                Supervivencia y combate
                                            </h4>
                                            <div class="space-y-3">
                                                <div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                                                    <p class="font-semibold text-slate-800 dark:text-white text-xs mb-1">Vuelo en Lobby
                                                        y protecciones <code
                                                            class="bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 px-1.5 py-0.5 rounded text-xs font-mono">/fly</code>
                                                    </p>
                                                    <p class="text-xs text-slate-500">Activa el modo vuelo libremente dentro del Lobby y
                                                        en tus zonas protegidas. Ideal para construir y moverte sin limites de terreno.
                                                    </p>
                                                </div>
                                                <div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                                                    <p class="font-semibold text-slate-800 dark:text-white text-xs mb-1">Curacion
                                                        instantanea <code
                                                            class="bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 px-1.5 py-0.5 rounded text-xs font-mono">/heal</code>
                                                    </p>
                                                    <p class="text-xs text-slate-500">Recupera toda tu barra de salud al maximo al
                                                        instante, en cualquier momento del juego.</p>
                                                </div>
                                                <div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                                                    <p class="font-semibold text-slate-800 dark:text-white text-xs mb-1">Llenar hambre
                                                        al instante <code
                                                            class="bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 px-1.5 py-0.5 rounded text-xs font-mono">/feed</code>
                                                    </p>
                                                    <p class="text-xs text-slate-500">Rellena tu barra de hambre al maximo de golpe.
                                                        Nunca mas pierdas vida ni velocidad por hambre.</p>
                                                </div>
                                                <div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                                                    <p class="font-semibold text-slate-800 dark:text-white text-xs mb-1">Reparar
                                                        herramientas y armaduras <code
                                                            class="bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 px-1.5 py-0.5 rounded text-xs font-mono">/repair</code>
                                                    </p>
                                                    <p class="text-xs text-slate-500">Repara el desgaste de tus herramientas y armaduras
                                                        al instante, sin gastar materiales ni experiencia en el yunque.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <h4 class="font-bold text-slate-900 dark:text-white flex items-center gap-2 mb-3">
                                                <x-heroicon-o-information-circle class="w-4 h-4 {{ $textColor }}" />
                                                Informacion y cosmeticos
                                            </h4>
                                            <div class="space-y-3">
                                                <div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                                                    <p class="font-semibold text-slate-800 dark:text-white text-xs mb-1">Radar de
                                                        jugadores cercanos <code
                                                            class="bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 px-1.5 py-0.5 rounded text-xs font-mono">/near</code>
                                                    </p>
                                                    <p class="text-xs text-slate-500">Detecta que jugadores estan rondando cerca de tu
                                                        posicion. Util para comerciar, cooperar o estar alerta en zonas de PvP.</p>
                                                </div>
                                                <div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                                                    <p class="font-semibold text-slate-800 dark:text-white text-xs mb-1">Ultima conexion
                                                        de jugadores <code
                                                            class="bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 px-1.5 py-0.5 rounded text-xs font-mono">/seen</code>
                                                    </p>
                                                    <p class="text-xs text-slate-500">Consulta cuando fue la ultima vez que cualquier
                                                        jugador estuvo conectado al servidor.</p>
                                                </div>
                                                <div class="p-3 bg-slate-50 dark:bg-slate-800/50 rounded-xl">
                                                    <p class="font-semibold text-slate-800 dark:text-white text-xs mb-1">Cabezas de
                                                        jugadores <code
                                                            class="bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 px-1.5 py-0.5 rounded text-xs font-mono">/skull</code>
                                                    </p>
                                                    <p class="text-xs text-slate-500">Obtén e invoca la cabeza personalizada de
                                                        cualquier jugador. Ideal para decoracion o coleccion.</p>
                                                </div>
                                            </div>
                                        </div>

                                    @endif
                                </div>

                                <div
                                    class="sticky bottom-0 bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-700 px-6 py-4 rounded-b-2xl flex gap-3">

                                    <button type="button" onclick="closeModal('modal-{{ $rango->id }}')"
                                        class="cursor-pointer flex-1 sm:flex-1 bg-slate-100 hover:bg-slate-200 dark:bg-slate-800 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-300 font-semibold py-2.5 px-4 rounded-xl transition active:scale-95">
                                        Cerrar
                                    </button>

                                    <a href="{{ route('orders.create', ['product_id' => $rango->id, 'amount' => $rango->price]) }}"
                                        class="cursor-pointer flex-[2] sm:flex-1 flex items-center justify-center gap-2 {{ $bgColor }} {{ $bgHover }} text-white font-bold py-2.5 px-4 rounded-xl transition active:scale-95">
                                        <x-heroicon-o-shopping-cart class="w-4 h-4" />
                                        S/ {{ number_format($rango->price, 2) }}
                                    </a>

                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            @endif
        </div>

        {{-- RANGO DEFENSOR --}}
        <div
            class="max-w-4xl mx-auto mt-16 border border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-900 p-6 rounded-2xl flex flex-col sm:flex-row items-center justify-between">
            <div class="flex items-center mb-4 sm:mb-0">
                <div class="bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 p-4 rounded-full mr-4">
                    <x-heroicon-o-shield-check class="w-7 h-7" />
                </div>
                <div>
                    <h3 class="text-xl font-bold tracking-tight text-slate-900 dark:text-white">Rango Defensor</h3>
                    <p class="text-sm text-slate-500 dark:text-slate-400">¿Te interesa saber que pueden hacer nuestros
                        moderadores?</p>
                </div>
            </div>
            <a href="{{ asset('pdf/manual_defensoria_v1.pdf') }}" target="_blank"
                class="cursor-pointer inline-flex items-center justify-center gap-2 rounded-xl text-sm font-semibold transition-all duration-200 bg-slate-800 text-white hover:bg-slate-700 dark:bg-slate-100 dark:text-slate-900 dark:hover:bg-white h-11 px-6 active:scale-95">
                <x-heroicon-o-document-text class="w-full sm:w-auto h-4" />
                Transparencia
            </a>
        </div>

        <hr class="border-slate-200 dark:border-slate-800 my-16">

        {{-- EVENTOS E ITEMS --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

            <div>
                <h2 class="text-2xl font-bold tracking-tight mb-6 flex items-center gap-2">
                    <x-heroicon-o-calendar-days class="w-6 h-6 text-indigo-500" />
                    Eventos Activos
                </h2>
                @if($eventos->isEmpty())
                    <p class="text-slate-500 dark:text-slate-400 text-sm bg-slate-50 dark:bg-slate-800/50 p-4 rounded-xl">No hay
                        eventos disponibles en este momento.</p>
                @else
                    <div class="grid grid-cols-1 gap-4">
                        @foreach($eventos as $evento)
                            <div
                                class="flex items-center justify-between border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-5 rounded-xl transition-all">
                                <div>
                                    <h3 class="text-lg font-bold tracking-tight">{{ $evento->name }}</h3>
                                    <span class="text-xl font-extrabold text-indigo-600 dark:text-indigo-400">S/
                                        {{ number_format($evento->price, 2) }}</span>
                                </div>
                                <a href="{{ route('orders.create', ['product_id' => $evento->id, 'amount' => $evento->price]) }}"
                                    class="cursor-pointer inline-flex items-center gap-1.5 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 font-semibold px-4 py-2 text-sm transition active:scale-95">
                                    <x-heroicon-o-ticket class="w-4 h-4" />
                                    Ticket
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            <div>
                <h2 class="text-2xl font-bold tracking-tight mb-6 flex items-center gap-2">
                    <x-heroicon-o-archive-box class="w-6 h-6 text-pink-500" />
                    Items Especiales
                </h2>
                @if($items->isEmpty())
                    <p class="text-slate-500 dark:text-slate-400 text-sm bg-slate-50 dark:bg-slate-800/50 p-4 rounded-xl">No hay
                        items en la tienda actualmente.</p>
                @else
                    <div class="grid grid-cols-1 gap-4">
                        @foreach($items as $item)
                            <div
                                class="flex items-center justify-between border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-5 rounded-xl transition-all">
                                <div>
                                    <h3 class="text-lg font-bold tracking-tight">{{ $item->name }}</h3>
                                    <span class="text-xl font-extrabold text-pink-600 dark:text-pink-400">S/
                                        {{ number_format($item->price, 2) }}</span>
                                </div>
                                <a href="{{ route('orders.create', ['product_id' => $item->id, 'amount' => $item->price]) }}"
                                    class="cursor-pointer inline-flex items-center gap-1.5 rounded-lg bg-pink-600 text-white hover:bg-pink-700 font-semibold px-4 py-2 text-sm transition active:scale-95">
                                    <x-heroicon-o-shopping-cart class="w-4 h-4" />
                                    Comprar
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

        </div>
    </div>

    <script>
        function openModal(id) {
            const modal = document.getElementById(id);
            const box = modal.querySelector('.relative');
            modal.classList.remove('hidden');
            requestAnimationFrame(() => requestAnimationFrame(() => {
                modal.classList.remove('opacity-0');
                box.classList.remove('scale-95');
                box.classList.add('scale-100');
            }));
            document.body.style.overflow = 'hidden';
        }

        function closeModal(id) {
            const modal = document.getElementById(id);
            const box = modal.querySelector('.relative');
            modal.classList.add('opacity-0');
            box.classList.remove('scale-100');
            box.classList.add('scale-95');
            setTimeout(() => {
                modal.classList.add('hidden');
                document.body.style.overflow = '';
            }, 300);
        }

        document.addEventListener('keydown', e => {
            if (e.key === 'Escape') {
                document.querySelectorAll('[id^="modal-"]:not(.hidden)').forEach(m => closeModal(m.id));
            }
        });
    </script>
@endsection