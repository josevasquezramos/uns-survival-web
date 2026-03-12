<x-app-layout title="Iniciar Sesión">
    <div class="flex items-center justify-center min-h-[80vh] p-4 md:p-8 bg-gray-50 mb-16">
        
        <div class="w-full max-w-6xl bg-white rounded-3xl shadow-xl border border-gray-100 flex flex-col md:flex-row overflow-hidden">
            
            <div class="md:w-1/2 bg-indigo-900 flex flex-col items-center justify-center p-12 border-b md:border-b-0 md:border-r border-gray-100">
                
                <img src="{{ asset('images/cat-wolf.gif') }}" alt="Mascotas" class="relative z-10 w-full max-w-sm h-auto object-contain">
                
                <div class="mt-8 flex items-center gap-3 text-indigo-900 text-sm tracking-widest bg-white/70 px-5 py-2.5 rounded-full border border-indigo-100">
                    <x-heroicon-s-lock-closed class="w-5 h-5" />
                    Área Segura
                </div>
            </div>

            <div class="md:w-1/2 p-8 md:p-16 flex flex-col justify-center bg-white">
                
                <h1 class="text-3xl md:text-5xl font-black text-gray-900 tracking-tight mb-3 leading-tight">
                    Iniciar <span class="text-indigo-600">Sesión</span>
                </h1>

                <p class="text-gray-600 mb-8 leading-relaxed">
                    Recuerda que el registro es en el Servidor.
                </p>

                @if ($errors->any())
                    <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-200">
                        <div class="flex items-center">
                            <x-heroicon-s-exclamation-circle class="h-5 w-5 text-red-500 mr-2 flex-shrink-0" />
                            <span class="text-sm text-red-600 font-bold">{{ $errors->first() }}</span>
                        </div>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf
                    
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Usuario de Minecraft</label>
                        <input type="text" name="username" value="{{ old('username') }}" required autofocus
                            class="w-full px-5 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all outline-none text-gray-800 font-medium"
                            placeholder="Ej. Steve">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Contraseña</label>
                        <input type="password" name="password" required
                            class="w-full px-5 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all outline-none text-gray-800 font-medium"
                            placeholder="••••••••">
                    </div>

                    <div class="flex items-center pt-2">
                        <input type="checkbox" name="remember" id="remember"
                            class="h-5 w-5 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded cursor-pointer transition-colors">
                        <label for="remember" class="ml-3 block text-sm font-medium text-gray-600 cursor-pointer select-none">
                            Recordar mi sesión
                        </label>
                    </div>

                    <div class="pt-4">
                        <button type="submit"
                            class="cursor-pointer w-full flex items-center justify-center gap-2 py-4 px-4 bg-gray-900 hover:bg-gray-800 text-white font-bold rounded-xl transition-all duration-300 shadow-md hover:shadow-lg">
                            Entrar al Panel
                            <x-heroicon-s-arrow-right class="ms-2 w-5 h-5" />
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>