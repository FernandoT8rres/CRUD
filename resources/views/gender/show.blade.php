<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender</title>
</head>
<body>
<h1>Genders <Table></Table></h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{$gender->id}}</td>
                <td>{{$gender->name}}</td>
            </tr>
        </tbody>
    </table>

    <br>

    <a href="{{ route('superheroes.index') }}">Back to List</a>

</body>
</html>