<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Players</title>
</head>
<body>

    <p><a href="/teams/{{ $player->team->id }}">{{ $player->team->name}}</a></p>
    <p>{{ $player->first_name }}</p>  <p>{{ $player->last_name }}</p>
    <p>{{ $player->email }}</p>
   
   
</body>
</html>