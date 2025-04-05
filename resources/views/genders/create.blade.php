<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Género</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold">Crear Género</h1>
        <form action="{{ route('genders.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
            </div>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-black rounded">Guardar</button>
        </form>
        <a href="{{ route('genders.index') }}" class="mt-4 inline-block text-blue-600">Volver a la lista de géneros</a>
    </div>
</body>
</html>