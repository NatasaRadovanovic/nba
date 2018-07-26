<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($news as $new)
    <p><a href="/news/{{$new->id}}">{{$new->title}}</a></p>
    <p>{{$new->content}}</p>

<h2>Korisniik koji je kreirao vest</h2>
<p>{{$new->user->name}}</p>
<p>{{$new->user->email}}</p>
@endforeach

<nav claass='blog-pagination'>
        <a class='btn btn-outline-{{$news->currentPage() == 1 ? "secondary disabled" :
        "primary" }}' href="{{ $news->previousPageUrl() }}">Previous</a>
        
        <a class='btn btn-outline-{{ $news->hasMorePages() ? "primary" : 
        "secondary disabled"}}' 
        href="{{ $news->nextPageUrl() }}">Next</a> 

        Page {{ $news->currentPage() }} of {{ $news->lastPage()}}
    </nav>
</body>
</html>