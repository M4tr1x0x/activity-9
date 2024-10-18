<nav class="bg-gray-800 p-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <!-- Logo o Nombre del Proyecto -->
        <div class="text-white text-2xl font-bold">Activity 9</div>

        <!-- Links de Navegación -->
        <ul class="flex items-center space-x-8">
            @auth
                <li>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" 
                                class="text-white text-lg font-medium hover:text-gray-300 transition">
                            Logout
                        </button>
                    </form>
                </li>
            @else
                <li>
                    <a href="{{ route('login') }}" 
                       class="text-white text-lg font-medium hover:text-gray-300 transition">
                        Login
                    </a>
                </li>
                <li>
                    <a href="{{ route('register') }}" 
                       class="text-white text-lg font-medium hover:text-gray-300 transition">
                        Register
                    </a>
                </li>
            @endauth
        </ul>
    </div>
</nav>
