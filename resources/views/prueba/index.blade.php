<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Prueba') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("Usted está conectado") }} --}}
                    <form method="POST">
                        @csrf
                        <textarea name="message" class="w-full bg-transparent border border-gray-500 py-2 px-4 focus:outline-none focus:border-blue-500" placeholder="{{__('What\'s on your mind?')}}"></textarea>
                        <x-primary-button class="mt-4">Enviar</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

