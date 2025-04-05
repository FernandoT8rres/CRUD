<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genders Table</title>
</head>
<body>
        <h1>Genders Table</h1>

        <hr>

        <a href="{{ route('genders.create') }}"> Add a new Gender</a>

        <hr>

        <br>

        <table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($genders as $item) <!-- Cambia $gender a $genders -->
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <a href="{{ route('genders.show', $item->id) }}">Show</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
        <a href="{{ route('superheroes.index') }}">Back to List</a>
</body>
</html>