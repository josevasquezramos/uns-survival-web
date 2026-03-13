@extends('layouts.panel', ['title' => 'Mi Cuenta', 'header_title' => 'Ajustes de Perfil'])

@section('content')
    <div class="max-w-3xl mx-auto space-y-6">

        @if (session('success'))
            <div id="toast-success"
                class="fixed top-20 left-4 right-4 md:left-auto md:right-5 md:w-full md:max-w-sm flex items-center p-4 text-gray-900 bg-white rounded-lg shadow-xl dark:text-gray-100 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 z-50 transition-all duration-500 transform opacity-0 -translate-y-4"
                role="alert">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-900/50 dark:text-green-400">
                    <x-heroicon-o-check-circle class="w-6 h-6" />
                </div>
                <div class="ml-3 text-sm font-medium">{{ session('success') }}</div>

                <button type="button" onclick="closeToast()" aria-label="Cerrar"
                    class="ml-auto -mx-1.5 -my-1.5 cursor-pointer bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700 transition-colors">
                    <span class="sr-only">Cerrar</span>
                    <x-heroicon-o-x-mark class="w-5 h-5" />
                </button>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const toast = document.getElementById('toast-success');
                    if (toast) {
                        setTimeout(() => {
                            toast.classList.remove('opacity-0', '-translate-y-4');
                            toast.classList.add('opacity-100', 'translate-y-0');
                        }, 100);
                        setTimeout(() => {
                            closeToast();
                        }, 5000);
                    }
                });

                function closeToast() {
                    const toast = document.getElementById('toast-success');
                    if (toast) {
                        toast.classList.remove('opacity-100', 'translate-y-0');
                        toast.classList.add('opacity-0', '-translate-y-4');
                        setTimeout(() => toast.remove(), 500);
                    }
                }
            </script>
        @endif

        <div
            class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-lg shadow-sm overflow-hidden">
            <div class="p-6 border-b border-gray-200 dark:border-gray-800">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Información de la Cuenta</h2>
                <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                    Actualiza tu apodo visible en la web y tu contraseña de acceso al servidor de Minecraft.
                </p>
            </div>

            <form method="POST" action="{{ route('profile.update') }}" class="p-6 space-y-6">
                @csrf

                <div class="flex items-center gap-6 mb-2">
                    <img src="{{ Auth::guard('minecraft')->user()->skin_url }}"
                        alt="Avatar de {{ Auth::guard('minecraft')->user()->username }}"
                        class="w-24 h-24 rounded-lg object-cover bg-gray-100 dark:bg-gray-800 border-2 border-gray-200 dark:border-gray-700 shadow-sm"
                        style="image-rendering: pixelated;">
                    <div>
                        <h3 class="text-md font-medium text-gray-900 dark:text-white">Avatar de Minecraft</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                            Tu avatar está enlazado directamente a tu cuenta del servidor.<br>
                            Para actualizarlo, usa el comando <code
                                class="bg-gray-100 dark:bg-gray-800 px-1.5 py-0.5 rounded text-blue-600 dark:text-blue-400 font-semibold">/skin</code>
                            dentro del juego.
                        </p>
                    </div>
                </div>

                <hr class="border-gray-200 dark:border-gray-800">

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Apodo Web
                    </label>
                    <div class="mt-2">
                        <input type="text" name="name" id="name"
                            value="{{ old('name', Auth::guard('minecraft')->user()->name) }}" required
                            class="block w-full sm:max-w-md rounded-md border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 text-gray-900 dark:text-white shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm px-4 py-2 border outline-none transition-colors">
                    </div>
                    @error('name')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                    @enderror
                    <p class="mt-2 text-xs text-gray-500 dark:text-gray-400">
                        Este es el nombre que se mostrará en la web. Tu nombre de usuario en Minecraft seguirá siendo
                        <b>{{ Auth::guard('minecraft')->user()->username }}</b>.
                    </p>
                </div>

                <hr class="border-gray-200 dark:border-gray-800">

                <div>
                    <h3 class="text-md font-medium text-gray-900 dark:text-white mb-4">Cambiar Contraseña</h3>

                    <div class="space-y-4">
                        <div>
                            <label for="current_password"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Contraseña Actual
                            </label>
                            <div class="mt-1">
                                <input type="password" name="current_password" id="current_password"
                                    class="block w-full sm:max-w-md rounded-md border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 text-gray-900 dark:text-white shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm px-4 py-2 border outline-none transition-colors"
                                    placeholder="Déjalo en blanco si no deseas cambiarla">
                            </div>
                            @error('current_password')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Nueva Contraseña
                            </label>
                            <div class="mt-1">
                                <input type="password" name="password" id="password"
                                    class="block w-full sm:max-w-md rounded-md border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 text-gray-900 dark:text-white shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm px-4 py-2 border outline-none transition-colors">
                            </div>
                            @error('password')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="password_confirmation"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Confirmar Nueva Contraseña
                            </label>
                            <div class="mt-1">
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="block w-full sm:max-w-md rounded-md border-gray-300 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 text-gray-900 dark:text-white shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm px-4 py-2 border outline-none transition-colors">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-4 flex items-center justify-end gap-3">
                    <a href="{{ route('dashboard') }}"
                        class="px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white transition-colors">
                        Cancelar
                    </a>
                    <button type="submit"
                        class="cursor-pointer bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md text-sm font-medium shadow-sm transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-900">
                        Guardar Cambios
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection