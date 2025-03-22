<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit superhero</title>
</head>
<body>
    <h1>Edit a Superhero</h1>

    <form action="{{ route('superheroes.update', $superhero->id) }}" method="POST">
        @csrf
        @method('patch')
        
        <label for="gender">Gender</label>
        <select name="gender_id" id="gender">
            @foreach($genders as $gender)
                <option value="{{ $gender->id }}" 
                    @if ($gender->id == $superhero->gender_id)
                        selected
                    @endif    
                >{{ $gender->name }}</option>
            @endforeach
        </select>

        <label for="universe">Universe</label>
        <select name="universe_id" id="universe">
            @foreach($universes as $universe) 
                <option value="{{ $universe->id }}" 
                    @if ($universe->id == $superhero->universe_id)
                        selected
                    @endif    
                >{{ $universe->name }}</option>
            @endforeach
        </select>

        <br><br>

        <label for="real_name">Real Name</label>
        <input type="text" name="real_name" value="{{ $superhero->real_name }}">

        <br><br>

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $superhero->name }}">

        <br><br>

        <label for="picture">Picture</label>
        <input type="text" name="picture" value="{{ $superhero->picture }}">

        <br><br>

        <input type="submit" value="Edit">
    </form>

    <br>
    <a href="{{ route('superheroes.index') }}">Back to List</a>
</body>
</html>