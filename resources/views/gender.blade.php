<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Gender<h1>
        <table>
            <thread>
        <tr>
                <th>Id</th>

                <th>Name</th>

        </tr>

        <tbody>

            @foreach($gender as $item)

            <tr>
                <td>{{$item -> id}}</td>

                <td>{{$item -> name}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('superhero.index') }}">Back to List</a>
</body>
</html>