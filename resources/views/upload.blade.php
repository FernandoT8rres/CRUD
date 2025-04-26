<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload & Download Files</title>
</head>
<body>
    <h1>Subir Archivo</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('upload.file') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" required>
        <button type="submit">Subir</button>
    </form>

    <h2>Descargar un archivo</h2>
    <form action="{{ url('/download') }}" method="GET">
        <input type="text" name="filename" placeholder="Nombre del archivo (ej. ejemplo.txt)" required>
        <button type="submit">Descargar</button>
    </form>
</body>
</html>
