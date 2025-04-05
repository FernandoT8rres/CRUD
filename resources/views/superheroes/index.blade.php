<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Superhéroes') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between mb-4">
                <a href="{{ route('superheroes.create') }}"
                   class="inline-block px-4 py-2 bg-blue-500 text-black rounded hover:bg-blue-600">
                    Crear Superhéroe
                </a>
                <a href="{{ route('universes.create') }}"
                   class="inline-block px-4 py-2 bg-green-500 text-black rounded hover:bg-green-600">
                    Crear Universo
                </a>
                <a href="{{ route('genders.create') }}"
   class="inline-block px-4 py-2 bg-green-500 text-black rounded hover:bg-green-600">
    Crear Género
</a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-700">
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Nombre</th>
                            <th class="px-4 py-2">Poder</th>
                            <th class="px-4 py-2">Universo</th>
                            <th class="px-4 py-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($superheroes as $superhero)
                            <tr class="border-b">
                                <td class="px-4 py-2">{{ $superhero->id }}</td>
                                <td class="px-4 py-2">{{ $superhero->name }}</td>
                                <td class="px-4 py-2">{{ $superhero->power }}</td>
                                <td class="px-4 py-2">{{ $superhero->universe?->name ?? 'Sin universo' }}</td>
                                <td class="px-4 py-2 space-x-2">
                                    <a href="{{ route('superheroes.edit', $superhero) }}"
                                       class="px-2 py-1 bg-yellow-400 text-black rounded hover:bg-yellow-500">
                                        Editar
                                    </a>
                                    <form action="{{ route('superheroes.destroy', $superhero) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="px-2 py-1 bg-red-500 text-black rounded hover:bg-red-600"
                                                onclick="return confirm('¿Estás seguro de eliminar este superhéroe?')">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @if($superheroes->isEmpty())
                    <p class="p-4 text-center text-gray-500">No hay superhéroes registrados.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>