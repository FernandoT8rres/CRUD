<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Superhéroe') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <form action="{{ route('superheroes.store') }}" method="POST">
    @csrf

    <div class="mb-4">
        <label class="block font-medium text-sm text-gray-700">Nombre Real</label>
        <input type="text" name="real_name" class="form-input w-full" value="{{ old('real_name') }}" required>
    </div>

    <div class="mb-4">
        <label class="block font-medium text-sm text-gray-700">Nombre de Superhéroe</label>
        <input type="text" name="name" class="form-input w-full" value="{{ old('name') }}" required>
    </div>

    <div class="mb-4">
    <label class="block font-medium text-sm text-gray-700">Género</label>
    <select name="gender_id" class="form-select w-full" required>
        <option value="">-- Selecciona un género --</option>
        @foreach($genders as $gender)
            <option value="{{ $gender->id }}">{{ $gender->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-4">
    <label class="block font-medium text-sm text-gray-700">Universo</label>
    <select name="universe_id" class="form-select w-full" required>
        <option value="">-- Selecciona un universo --</option>
        @foreach($universes as $universe)
            <option value="{{ $universe->id }}">{{ $universe->name }}</option>
        @endforeach
    </select>
</div>

    <div class="mb-4">
        <label class="block font-medium text-sm text-gray-700">Imagen</label>
        <input type="text" name="picture" class="form-input w-full" value="{{ old('picture') }}">
    </div>

    <div class="flex justify-end">
        <a href="{{ route('superheroes.index') }}" class="mr-2 px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Cancelar</a>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-black rounded hover:bg-blue-700">Guardar</button>
    </div>
</form>
        </div>
    </div>
</x-app-layout>
