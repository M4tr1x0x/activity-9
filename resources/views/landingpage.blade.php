<x-guest-layout>
    <div class="min-h-screen bg-gray-100 flex items-center justify-center">
        <div class="max-w-md w-full bg-white shadow-lg rounded-lg p-8">
            <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">
                Bienvenido a Activity 9
            </h1>
            <p class="text-center text-gray-600 mb-8">
                ¡Por favor, inicia sesión o regístrate para acceder al dashboard!
            </p>
            <div class="flex justify-center space-x-4">
                <a href="{{ route('login') }}" 
                   class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition text-lg">
                    Login
                </a>
                <a href="{{ route('register') }}" 
                   class="px-6 py-2 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-100 transition text-lg">
                    Register
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>
