<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>{{ $new->title }}</p>
    <p>{{ $new->content }}</p>

    <h2>Korisniik koji je kreirao vest</h2>
    <p>{{$new->user->name}}</p>
    <p>{{$new->user->email}}</p>
</body>
</html>