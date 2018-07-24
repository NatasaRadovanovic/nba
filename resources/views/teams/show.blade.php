<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>
    <p>{{ $team->name }}<p>
    <p>{{ $team->email }}<p>
    <p>{{ $team->address }}<p>
    <p>{{ $team->city }}<p><br>
    
    <h3>Igraci</h3>
    @foreach($team->players as $player)
    <p><a href="/players/{{ $player->id }}">{{ $player->first_name }} 
    {{ $player->last_name }}</a></p>
    @endforeach
</body>
</html>