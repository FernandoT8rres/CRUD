<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Universo') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
            <form action="{{ route('universes.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="block font-medium text-sm text-gray-700">Nombre</label>
                    <input type="text" name="name" class="form-input w-full" value="{{ old('name') }}" required>
                </div>

                <div class="flex justify-end">
                    <a href="{{ route('universes.index') }}" class="mr-2 px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Cancelar</a>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-black rounded hover:bg-blue-700">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>