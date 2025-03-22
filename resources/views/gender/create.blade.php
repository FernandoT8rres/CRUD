<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genders</title>
</head>
<body>
    <h1>Create Gender</h1>
<form action="{{ route('gender.store') }}" method="POST">
    @csrf
    <label for="name">Gender Name:</label>
    <input type="text" name="name" required>
    <button type="submit">Save</button>
</form>
<a href="{{ route('superheroes.index') }}">Back to List</a>
</body>
</html>
<a href="{{ route('superheroes.index') }}">Back to List</a>
</body>
</html>