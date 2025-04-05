<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Superhéroe') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
            <form action="{{ route('superheroes.update', $superhero) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block font-medium text-sm text-gray-700">Nombre</label>
                    <input type="text" name="name" class="form-input w-full" value="{{ old('name', $superhero->name) }}" required>
                </div>
                <div class="mb-4">
    <label for="real_name" class="block font-medium text-sm text-gray-700">Nombre Real</label>
    <input type="text" name="real_name" id="real_name" value="{{ old('real_name', $superhero->real_name) }}" class="form-input w-full" required>
</div>
                <div class="mb-4">
                    <label class="block font-medium text-sm text-gray-700">Poder</label>
                    <input type="text" name="power" class="form-input w-full" value="{{ old('power', $superhero->power) }}" required>
                </div>

                <div class="mb-4">
    <label class="block font-medium text-sm text-gray-700">Universo</label>
    <select name="universe_id" class="form-select w-full" required>
        <option value="">-- Selecciona un universo --</option>
        @foreach($universes as $universe)
            <option value="{{ $universe->id }}" {{ $superhero->universe_id == $universe->id ? 'selected' : '' }}>
                {{ $universe->name }}
            </option>
        @endforeach
    </select>
</div>

                <div class="flex justify-end">
                    <a href="{{ route('superheroes.index') }}" class="mr-2 px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Cancelar</a>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-black rounded hover:bg-blue-700">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
