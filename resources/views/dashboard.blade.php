<!DOCTYPE html>
<html lang="es" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . ' • Unsurvival' : 'Unsurvival' }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>

<body
    class="antialiased bg-gray-50 dark:bg-gray-950 text-gray-900 dark:text-gray-100 font-sans transition-colors duration-200">
    @php
        $user = Auth::guard('minecraft')->user();
        $stats = $user->stats;

        $dinero = $user->economy->balance ?? 0.00;

        $playTime = $stats->get('PLAY_ONE_MINUTE', 0);
        $playTimeHours = floor($playTime / 72000);
        $playTimeMinutes = floor(($playTime % 72000) / 1200);

        $walkDistance = $stats->get('WALK_ONE_CM', 0) / 100000;
        $sprintDistance = $stats->get('SPRINT_ONE_CM', 0) / 100000;
        $crouchDistance = $stats->get('CROUCH_ONE_CM', 0) / 100000;
        $totalDistance = $walkDistance + $sprintDistance + $crouchDistance;

        $deaths = $stats->get('DEATHS', 0);
        $damageTaken = $stats->get('DAMAGE_TAKEN', 0);
        $damageDealt = $stats->get('DAMAGE_DEALT', 0);
        $mobKills = $stats->get('MOB_KILLS', 0);

        $blocksMined = $stats->get('z:mined', 0);
        $blocksPlaced = $stats->get('z:placed', 0);
        $itemsCrafted = $stats->get('z:crafted', 0);

        $uniqueMined = $stats->get('z:mine_kind', 0);
        $uniquePlaced = $stats->get('z:place_kind', 0);
        $uniqueCrafted = $stats->get('z:craft_kind', 0);
        $uniqueKilled = $stats->get('z:mob_kind', 0);

        $chestsOpened = $stats->get('CHEST_OPENED', 0);
        $bedsSlept = $stats->get('SLEEP_IN_BED', 0);
        $fishCaught = $stats->get('FISH_CAUGHT', 0);
        $enchantments = $stats->get('ITEM_ENCHANTED', 0);

        $villagerTalked = $stats->get('TALKED_TO_VILLAGER', 0);
        $villagerTraded = $stats->get('TRADED_WITH_VILLAGER', 0);
        $boatDistance = $stats->get('BOAT_ONE_CM', 0) / 100000;
        $elytraDistance = $stats->get('AVIATE_ONE_CM', 0) / 100000;

        $toolUsage = [
            'pico' => $stats->get('z:pickaxe', 0),
            'hacha' => $stats->get('z:axe', 0),
            'pala' => $stats->get('z:shovel', 0),
            'espada' => $stats->get('z:sword', 0),
            'azada' => $stats->get('z:hoe', 0),
            'arco' => $stats->get('z:bow', 0),
            'tridente' => $stats->get('z:trident', 0),
        ];

        $topMined = collect($stats->filter(function ($value, $key) {
            return str_starts_with($key, 'z:mine_') && $key !== 'z:mine_kind' && !str_contains($key, 'kind');
        }))->sortDesc();

        $topPlaced = collect($stats->filter(function ($value, $key) {
            return str_starts_with($key, 'z:place_') && $key !== 'z:place_kind' && !str_contains($key, 'kind');
        }))->sortDesc();

        $topCrafted = collect($stats->filter(function ($value, $key) {
            return str_starts_with($key, 'z:craft_') && $key !== 'z:craft_kind' && !str_contains($key, 'kind');
        }))->sortDesc();

        $topKilled = collect($stats->filter(function ($value, $key) {
            return str_starts_with($key, 'z:mob_') && $key !== 'z:mob_kind' && !str_contains($key, 'kind');
        }))->sortDesc();
    @endphp

    <div class="min-h-screen flex w-full relative">
        <div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-40 hidden md:hidden transition-opacity opacity-0">
        </div>
        <aside id="sidebar"
            class="fixed inset-y-0 left-0 z-50 w-64 flex-col bg-white dark:bg-gray-900 border-r border-gray-200 dark:border-gray-800 h-screen transform -translate-x-full md:relative md:translate-x-0 transition-transform duration-300 ease-in-out flex">
            <div class="h-16 flex items-center px-4 border-b border-gray-200 dark:border-gray-800 shrink-0">
                <a href="{{ route('dashboard') }}"
                    class="flex items-center gap-3 w-full rounded-md outline-none focus-visible:ring-2 focus-visible:ring-gray-400">
                    <img src="{{ asset('images/icon.webp') }}" alt="Logo Unsurvival" class="w-10 h-10 object-contain">
                    <span class="font-semibold text-lg text-gray-900 dark:text-white">Unsurvival</span>
                </a>
            </div>
            <nav class="flex-1 overflow-y-auto py-4 px-3 space-y-1">
                <a href="{{ route('dashboard') }}"
                    class="flex items-center gap-3 px-3 py-2 font-medium rounded-md bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white transition-colors">
                    <x-heroicon-o-home class="w-5 h-5 text-gray-700 dark:text-gray-300" />
                    Inicio
                </a>
                <a href="#"
                    class="flex items-center gap-3 px-3 py-2 font-medium rounded-md text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-gray-900 dark:hover:text-white transition-colors">
                    <x-heroicon-o-users class="w-5 h-5" />
                    Jugadores
                </a>
                <a href="#"
                    class="flex items-center gap-3 px-3 py-2 font-medium rounded-md text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-gray-900 dark:hover:text-white transition-colors">
                    <x-heroicon-o-cog-8-tooth class="w-5 h-5" />
                    Ajustes
                </a>
            </nav>
            <div class="p-4 border-t border-gray-200 dark:border-gray-800 relative shrink-0">
                <div id="user-dropdown"
                    class="hidden absolute bottom-full left-4 right-4 mb-2 bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-md shadow-lg py-1 z-20 overflow-hidden">
                    <a href="#"
                        class="flex items-center gap-2 px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                        <x-heroicon-o-user class="w-5 h-5" />
                        Mi Cuenta
                    </a>
                    <div class="h-px bg-gray-200 dark:bg-gray-800 my-1"></div>
                    <form method="POST" action="{{ route('logout') ?? '#' }}" class="m-0">
                        @csrf
                        <button type="submit"
                            class="cursor-pointer flex items-center gap-2 w-full text-left px-4 py-2 text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-950/50 transition-colors">
                            <x-heroicon-o-arrow-right-on-rectangle class="w-5 h-5" />
                            Cerrar Sesión
                        </button>
                    </form>
                </div>
                <button id="user-menu-btn"
                    class="cursor-pointer flex items-center w-full gap-3 p-2 -mx-2 rounded-md hover:bg-gray-50 dark:hover:bg-gray-800/50 transition-colors text-left focus:outline-none focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-700">
                    <img src="{{ $user->skin_url }}" alt="Avatar"
                        class="w-9 h-9 rounded-md object-cover bg-gray-100 dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                    <div class="flex-1 min-w-0">
                        <p class="font-medium text-gray-900 dark:text-white truncate">{{ $user->name }}</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400 truncate">{{ $user->username }}</p>
                    </div>
                    <x-heroicon-o-chevron-up class="w-5 h-5 text-gray-400" />
                </button>
            </div>
        </aside>

        <div class="flex flex-col flex-1 min-w-0 h-screen overflow-hidden">
            <header
                class="h-16 shrink-0 flex items-center justify-between px-4 md:px-6 border-b border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900 z-10 transition-colors duration-200">
                <div class="flex items-center">
                    <button id="mobile-menu-btn"
                        class="md:hidden mr-4 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white p-1 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none">
                        <x-heroicon-o-bars-3 class="w-5 h-5" />
                    </button>
                    <h2 class="font-semibold text-gray-900 dark:text-white">Dashboard Detallado</h2>
                </div>
                <div class="flex items-center">
                    <button id="theme-toggle"
                        class="p-2 rounded-md text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-gray-900 dark:hover:text-white transition-colors focus:outline-none">
                        <x-heroicon-o-sun class="w-5 h-5 hidden dark:block" />
                        <x-heroicon-o-moon class="w-5 h-5 block dark:hidden" />
                    </button>
                </div>
            </header>

            <main class="flex-1 p-4 md:p-6 overflow-y-auto">
                <div class="w-full max-w-7xl mx-auto space-y-6">

                    <div
                        class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg shadow-sm overflow-hidden">
                        <div
                            class="bg-gradient-to-r from-gray-900 to-gray-800 dark:from-gray-950 dark:to-gray-900 px-4 sm:px-6 py-4 sm:py-5 flex flex-col sm:flex-row items-start sm:items-center gap-4">
                            <img class="w-16 h-16 sm:w-22 sm:h-22 rounded-lg object-cover border-2 border-gray-600 shadow-lg"
                                src="{{ $user->skin_url }}" alt="Skin de {{ $user->username }}">
                            <div class="flex-1 w-full sm:w-auto">
                                <div class="inline-block px-3 py-1 rounded-md text-sm mb-2"
                                    style="background: #1a252f; text-shadow: 1px 1px 0px #000;">
                                    {!! $user->html_prefix !!}
                                </div>
                                <h1 class="text-xl sm:text-2xl font-semibold text-white">{{ $user->name }}</h1>
                                <p class="text-gray-300 text-sm">{{ $user->username }}</p>
                            </div>
                            <div class="w-full sm:w-auto text-left sm:text-right mt-2 sm:mt-0">
                                <div class="text-2xl sm:text-3xl font-bold text-white">$ {{ number_format($dinero, 2) }}
                                </div>
                                <p class="text-gray-400 text-sm">Balance</p>
                            </div>
                        </div>

                        <div
                            class="grid grid-cols-2 md:grid-cols-3 gap-4 p-4 sm:p-6 bg-gray-50 dark:bg-gray-800/50 border-b border-gray-200 dark:border-gray-700">
                            <div>
                                <span class="text-xs text-gray-500 dark:text-gray-400 uppercase">Registro</span>
                                <p class="text-base sm:text-lg font-semibold text-gray-900 dark:text-white">
                                    {{ date('d/m/Y', $user->regdate / 1000) }}</p>
                            </div>
                            <div>
                                <span class="text-xs text-gray-500 dark:text-gray-400 uppercase">Última conexión</span>
                                <p class="text-base sm:text-lg font-semibold text-gray-900 dark:text-white">
                                    {{ $stats->get('z:last_played') ? date('d/m/Y', $stats->get('z:last_played')) : 'Nunca' }}
                                </p>
                            </div>
                            <div>
                                <span class="text-xs text-gray-500 dark:text-gray-400 uppercase">Tiempo jugado</span>
                                <p class="text-base sm:text-lg font-semibold text-gray-900 dark:text-white">
                                    {{ $playTimeHours }}h {{ $playTimeMinutes }}m</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div
                            class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg p-5">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Bloques minados</p>
                                    <p class="text-2xl font-bold text-gray-900 dark:text-white">
                                        {{ number_format($blocksMined) }}</p>
                                </div>
                                <div
                                    class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                                    <x-heroicon-o-cube class="w-6 h-6 text-blue-600 dark:text-blue-400" />
                                </div>
                            </div>
                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-2">Tipos diferentes:
                                {{ $uniqueMined }}</p>
                        </div>

                        <div
                            class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg p-5">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Bloques colocados</p>
                                    <p class="text-2xl font-bold text-gray-900 dark:text-white">
                                        {{ number_format($blocksPlaced) }}</p>
                                </div>
                                <div
                                    class="w-10 h-10 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center">
                                    <x-heroicon-o-squares-2x2 class="w-6 h-6 text-green-600 dark:text-green-400" />
                                </div>
                            </div>
                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-2">Tipos diferentes:
                                {{ $uniquePlaced }}</p>
                        </div>

                        <div
                            class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg p-5">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Items crafteados</p>
                                    <p class="text-2xl font-bold text-gray-900 dark:text-white">
                                        {{ number_format($itemsCrafted) }}</p>
                                </div>
                                <div
                                    class="w-10 h-10 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center">
                                    <x-heroicon-o-wrench-screwdriver
                                        class="w-6 h-6 text-purple-600 dark:text-purple-400" />
                                </div>
                            </div>
                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-2">Tipos diferentes:
                                {{ $uniqueCrafted }}</p>
                        </div>

                        <div
                            class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg p-5">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Mobs asesinados</p>
                                    <p class="text-2xl font-bold text-gray-900 dark:text-white">
                                        {{ number_format($mobKills) }}</p>
                                </div>
                                <div
                                    class="w-10 h-10 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center">
                                    <x-heroicon-o-fire class="w-6 h-6 text-red-600 dark:text-red-400" />
                                </div>
                            </div>
                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-2">Tipos diferentes:
                                {{ $uniqueKilled }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <div
                            class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg p-5">
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                                <x-heroicon-o-arrow-path class="w-5 h-5" />
                                Distancia recorrida
                            </h3>
                            <div class="space-y-3">
                                <div>
                                    <div class="flex justify-between text-sm mb-1">
                                        <span class="text-gray-500 dark:text-gray-400">Caminando</span>
                                        <span
                                            class="font-medium text-gray-900 dark:text-white">{{ number_format($walkDistance, 1) }}
                                            km</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="bg-blue-600 h-2 rounded-full"
                                            style="width: {{ $totalDistance > 0 ? ($walkDistance / $totalDistance) * 100 : 0 }}%">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-sm mb-1">
                                        <span class="text-gray-500 dark:text-gray-400">Corriendo</span>
                                        <span
                                            class="font-medium text-gray-900 dark:text-white">{{ number_format($sprintDistance, 1) }}
                                            km</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="bg-green-600 h-2 rounded-full"
                                            style="width: {{ $totalDistance > 0 ? ($sprintDistance / $totalDistance) * 100 : 0 }}%">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-sm mb-1">
                                        <span class="text-gray-500 dark:text-gray-400">Agachado</span>
                                        <span
                                            class="font-medium text-gray-900 dark:text-white">{{ number_format($crouchDistance, 1) }}
                                            km</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2">
                                        <div class="bg-yellow-600 h-2 rounded-full"
                                            style="width: {{ $totalDistance > 0 ? ($crouchDistance / $totalDistance) * 100 : 0 }}%">
                                        </div>
                                    </div>
                                </div>
                                @if($boatDistance > 0 || $elytraDistance > 0)
                                    <div class="pt-2 border-t border-gray-200 dark:border-gray-700">
                                        @if($boatDistance > 0)
                                            <div class="flex justify-between text-sm">
                                                <span class="text-gray-500 dark:text-gray-400">En bote</span>
                                                <span
                                                    class="font-medium text-gray-900 dark:text-white">{{ number_format($boatDistance, 1) }}
                                                    km</span>
                                            </div>
                                        @endif
                                        @if($elytraDistance > 0)
                                            <div class="flex justify-between text-sm mt-1">
                                                <span class="text-gray-500 dark:text-gray-400">Con élitros</span>
                                                <span
                                                    class="font-medium text-gray-900 dark:text-white">{{ number_format($elytraDistance, 1) }}
                                                    km</span>
                                            </div>
                                        @endif
                                    </div>
                                @endif
                                <div class="mt-3 text-center">
                                    <span
                                        class="text-lg font-bold text-gray-900 dark:text-white">{{ number_format($totalDistance, 1) }}
                                        km</span>
                                    <span class="text-sm text-gray-500 dark:text-gray-400 ml-2">totales</span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg p-5">
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-4 flex items-center gap-2">
                                <x-heroicon-o-wrench class="w-5 h-5" />
                                Uso de herramientas
                            </h3>
                            <div class="grid grid-cols-2 gap-3">
                                @foreach($toolUsage as $tool => $count)
                                    @if($tool !== 'tridente' || $count > 0)
                                        <div class="flex items-center gap-2">
                                            <div class="w-2 h-2 rounded-full 
                                                @if($tool == 'pico') bg-blue-500
                                                @elseif($tool == 'hacha') bg-green-500
                                                @elseif($tool == 'pala') bg-yellow-500
                                                @elseif($tool == 'espada') bg-red-500
                                                @elseif($tool == 'azada') bg-gray-500
                                                @elseif($tool == 'arco') bg-purple-500
                                                @elseif($tool == 'tridente') bg-cyan-500
                                                @endif
                                            "></div>
                                            <span
                                                class="text-sm text-gray-600 dark:text-gray-300 capitalize flex-1">{{ $tool }}</span>
                                            <span
                                                class="text-sm font-medium text-gray-900 dark:text-white">{{ number_format($count) }}</span>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div
                            class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg p-5">
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-3 flex items-center gap-2">
                                <x-heroicon-o-heart class="w-5 h-5 text-red-500" />
                                Combate
                            </h3>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-gray-500 dark:text-gray-400">Muertes</span>
                                    <span
                                        class="font-medium text-gray-900 dark:text-white">{{ number_format($deaths) }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-500 dark:text-gray-400">Daño recibido</span>
                                    <span
                                        class="font-medium text-gray-900 dark:text-white">{{ number_format($damageTaken) }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-500 dark:text-gray-400">Daño infligido</span>
                                    <span
                                        class="font-medium text-gray-900 dark:text-white">{{ number_format($damageDealt) }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-500 dark:text-gray-400">Mobs asesinados</span>
                                    <span
                                        class="font-medium text-gray-900 dark:text-white">{{ number_format($mobKills) }}</span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg p-5">
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-3 flex items-center gap-2">
                                <x-heroicon-o-cube class="w-5 h-5" />
                                Actividades
                            </h3>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-gray-500 dark:text-gray-400">Cofres abiertos</span>
                                    <span
                                        class="font-medium text-gray-900 dark:text-white">{{ number_format($chestsOpened) }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-500 dark:text-gray-400">Veces dormido</span>
                                    <span
                                        class="font-medium text-gray-900 dark:text-white">{{ number_format($bedsSlept) }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-500 dark:text-gray-400">Peces pescados</span>
                                    <span
                                        class="font-medium text-gray-900 dark:text-white">{{ number_format($fishCaught) }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-500 dark:text-gray-400">Items encantados</span>
                                    <span
                                        class="font-medium text-gray-900 dark:text-white">{{ number_format($enchantments) }}</span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg p-5">
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-3 flex items-center gap-2">
                                <x-heroicon-o-chat-bubble-left-ellipsis class="w-5 h-5" />
                                Aldeanos
                            </h3>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-gray-500 dark:text-gray-400">Conversaciones</span>
                                    <span
                                        class="font-medium text-gray-900 dark:text-white">{{ number_format($villagerTalked) }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-500 dark:text-gray-400">Comercios</span>
                                    <span
                                        class="font-medium text-gray-900 dark:text-white">{{ number_format($villagerTraded) }}</span>
                                </div>
                                <div class="mt-3 pt-2 border-t border-gray-200 dark:border-gray-700">
                                    <span class="text-sm text-gray-500 dark:text-gray-400">Interacción total</span>
                                    <p class="text-xl font-bold text-gray-900 dark:text-white">
                                        {{ number_format($villagerTalked + $villagerTraded) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <div
                            class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg p-5">
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-3 flex items-center gap-2">
                                <x-heroicon-o-cube-transparent class="w-5 h-5" />
                                Top bloques minados
                            </h3>
                            <div class="space-y-2">
                                <div
                                    class="flex justify-between items-center text-sm font-medium text-gray-500 dark:text-gray-400 pb-1 border-b border-gray-200 dark:border-gray-700">
                                    <span>Tipos diferentes: {{ $uniqueMined }}</span>
                                </div>
                                @foreach($topMined->take(5) as $key => $count)
                                    @php
                                        $parts = explode('_', $key);
                                        $blockName = implode(' ', array_slice($parts, 2));
                                        $blockName = ucwords(strtolower($blockName));
                                    @endphp
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm text-gray-600 dark:text-gray-300">{{ $blockName }}</span>
                                        <span
                                            class="font-medium text-gray-900 dark:text-white">{{ number_format($count) }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div
                            class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg p-5">
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-3 flex items-center gap-2">
                                <x-heroicon-o-squares-plus class="w-5 h-5" />
                                Top bloques colocados
                            </h3>
                            <div class="space-y-2">
                                <div
                                    class="flex justify-between items-center text-sm font-medium text-gray-500 dark:text-gray-400 pb-1 border-b border-gray-200 dark:border-gray-700">
                                    <span>Tipos diferentes: {{ $uniquePlaced }}</span>
                                </div>
                                @foreach($topPlaced->take(5) as $key => $count)
                                    @php
                                        $parts = explode('_', $key);
                                        $blockName = implode(' ', array_slice($parts, 2));
                                        $blockName = ucwords(strtolower($blockName));
                                    @endphp
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm text-gray-600 dark:text-gray-300">{{ $blockName }}</span>
                                        <span
                                            class="font-medium text-gray-900 dark:text-white">{{ number_format($count) }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div
                            class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg p-5">
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-3 flex items-center gap-2">
                                <x-heroicon-o-wrench-screwdriver class="w-5 h-5" />
                                Top items crafteados
                            </h3>
                            <div class="space-y-2">
                                <div
                                    class="flex justify-between items-center text-sm font-medium text-gray-500 dark:text-gray-400 pb-1 border-b border-gray-200 dark:border-gray-700">
                                    <span>Tipos diferentes: {{ $uniqueCrafted }}</span>
                                </div>
                                @foreach($topCrafted->take(5) as $key => $count)
                                    @php
                                        $parts = explode('_', $key);
                                        $itemName = implode(' ', array_slice($parts, 2));
                                        $itemName = ucwords(strtolower($itemName));
                                    @endphp
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm text-gray-600 dark:text-gray-300">{{ $itemName }}</span>
                                        <span
                                            class="font-medium text-gray-900 dark:text-white">{{ number_format($count) }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div
                            class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg p-5">
                            <h3 class="font-semibold text-gray-900 dark:text-white mb-3 flex items-center gap-2">
                                <x-heroicon-o-bug-ant class="w-5 h-5" />
                                Top mobs asesinados
                            </h3>
                            <div class="space-y-2">
                                <div
                                    class="flex justify-between items-center text-sm font-medium text-gray-500 dark:text-gray-400 pb-1 border-b border-gray-200 dark:border-gray-700">
                                    <span>Tipos diferentes: {{ $uniqueKilled }}</span>
                                </div>
                                @foreach($topKilled->take(5) as $key => $count)
                                    @php
                                        $parts = explode('_', $key);
                                        $mobName = implode(' ', array_slice($parts, 2));
                                        $mobName = ucwords(strtolower($mobName));
                                    @endphp
                                    <div class="flex justify-between items-center">
                                        <span class="text-sm text-gray-600 dark:text-gray-300">{{ $mobName }}</span>
                                        <span
                                            class="font-medium text-gray-900 dark:text-white">{{ number_format($count) }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const themeToggleBtn = document.getElementById('theme-toggle');
            themeToggleBtn.addEventListener('click', function () {
                document.documentElement.classList.toggle('dark');
                if (document.documentElement.classList.contains('dark')) {
                    localStorage.setItem('theme', 'dark');
                } else {
                    localStorage.setItem('theme', 'light');
                }
            });

            const userMenuBtn = document.getElementById('user-menu-btn');
            const userDropdown = document.getElementById('user-dropdown');
            userMenuBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                userDropdown.classList.toggle('hidden');
            });

            const mobileMenuBtn = document.getElementById('mobile-menu-btn');
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');

            function openSidebar() {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('hidden');
                setTimeout(() => overlay.classList.remove('opacity-0'), 10);
            }

            function closeSidebar() {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('opacity-0');
                setTimeout(() => overlay.classList.add('hidden'), 300);
            }

            mobileMenuBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                if (sidebar.classList.contains('-translate-x-full')) {
                    openSidebar();
                } else {
                    closeSidebar();
                }
            });

            document.addEventListener('click', function (e) {
                if (!userMenuBtn.contains(e.target) && !userDropdown.contains(e.target)) {
                    userDropdown.classList.add('hidden');
                }
                if (window.innerWidth < 768) {
                    if (overlay.contains(e.target)) {
                        closeSidebar();
                    }
                }
            });
        });
    </script>
</body>

</html>