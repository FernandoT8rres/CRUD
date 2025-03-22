<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Universe</title>
</head>
<body>
    <h1>Create universe</h1>

    <form action = "{{ route('universes.store')}}" method = "POST">
        @csrf
        <label for = "name">Name</label>
        
        <input type = "text" name = "name">

        <input type = "submit" value = "Create Universe">

</form>
<a href="{{ route('superheroes.index') }}">Back to List</a>