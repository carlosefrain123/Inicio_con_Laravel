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
                    {{-- @dump($errors) --}}
                    <form method="POST" action="{{route('prueba.store')}}">
                        @csrf
                        <textarea name="message" class="w-full bg-transparent border border-gray-500 py-2 px-4 focus:outline-none focus:border-blue-500" placeholder="{{__('What\'s on your mind?')}}">{{old('message')}}</textarea>
                        <x-input-error :messages="$errors->get('message')" class="mt-2"/>
                        {{-- @error('message'){{$message}}@enderror --}}
                        <x-primary-button class="mt-4">Enviar</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

