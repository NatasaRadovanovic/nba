@extends('layouts.master')
@section('content')

    @foreach($news as $new)
        <h2><a href="/news/{{$new->id}}">{{$new->title}}</a></h2>
    <div style="width:60%;">
        <p>{{$new->content}}</p>
     </div>   

    <em><p>{{$new->user->name}}</p></em>
    @endforeach

@if(count($new->teams))
        <ul class='list-unstyled'>
            @foreach($new->teams as $team)
                <li>
                  <a href='/teams/{{ $team->id }}'>{{ $team->name }}</a>
                </li>
            @endforeach
        </ul>
    @endif

<nav class='blog-pagination'>
    <a class="btn btn-outline-{{ $news->currentPage() == 1 ? 'secondary disabled' : 'primary' }}"
         href='{{ $news->previousPageUrl() }}'>Previous</a>
    <a class="btn btn-outline-{{ $news->hasMorePages() ? 'primary' : 'secondary disabled' }}"
         href='{{ $news->nextPageUrl() }}'>Next</a>
    Page {{ $news->currentPage() }} of {{ $news->lastPage() }}
       
    </nav>
@endsection