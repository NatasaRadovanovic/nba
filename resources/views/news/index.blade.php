@extends('layouts.master')
@section('content')

 @if(Session::has('message'))
    <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

<a class="btn btn-primary" href="/create" >Create news</a><br><br>
    
    @foreach($news as $new)
        <h2><a href="/news/{{$new->id}}">{{$new->title}}</a></h2>
    <div style="width:60%;">
        <p>{{$new->content}}</p>
     </div>   

    <em><p>{{$new->user->name}}</p></em>
    @endforeach

<nav class='blog-pagination'>
    <a class="btn btn-outline-{{ $news->currentPage() == 1 ? 'secondary disabled' : 'primary' }}"
         href='{{ $news->previousPageUrl() }}'>Previous</a>
    <a class="btn btn-outline-{{ $news->hasMorePages() ? 'primary' : 'secondary disabled' }}"
         href='{{ $news->nextPageUrl() }}'>Next</a>
    Page {{ $news->currentPage() }} of {{ $news->lastPage() }}
       
    </nav>
@endsection