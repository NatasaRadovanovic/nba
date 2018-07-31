@extends('layouts.master')
@section('content')

    <h2>{{ $new->title }}</h2>
    <div style="width:60%;">    
        <p>{{ $new->content }}</p>
    </div>   

    <em><p>{{$new->user->name}}</p></em>
    <em><p><i class="fas fa-envelope"></i> {{$new->user->email}}</p></em>
    
    @if(count($new->teams))
        <ul class='list-unstyled'>
            @foreach($new->teams as $team)
                <li>
                    <a href='/teams/{{ $team->id }}'>{{ $team->name }}</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection