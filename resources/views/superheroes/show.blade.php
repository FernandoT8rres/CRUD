<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superhero Card</title>
</head>
<body>
    <h1>Superhero Card</h1>

    <p>Name: {{ $superhero->name }}</p>
        
        <p>Real Name: {{ $superhero->real_name }}</p>
        
        <p>Gender: {{ $superhero->gender_id }},  {{ $superhero->gender->name }}</p>

        <p>Universe: {{ $superhero->universe_id }},  {{ $superhero->universe->name}}</p>

        <p>Picture: {{ $superhero->picture }}</p>

        <a href="{{ route('superheroes.index') }}">Back to List</a>
</body>
</html>