<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel de Usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-green-100 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-800">
                    ¡Has iniciado sesión exitosamente!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
