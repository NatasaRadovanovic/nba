@extends('layouts.master')
@section('content')
    
    <p>{{ $team->name }}<p>
    <p>{{ $team->email }}<p>
    <p>{{ $team->address }}<p>
    <p>{{ $team->city }}<p><br>
    <a class="btn btn-primary" href="/news/team/{{ $team->name }}">News</a>
    
    <h3>Igraci</h3>
    @foreach($team->players as $player)
    <p><a href="/players/{{ $player->id }}">{{ $player->first_name }} 
    {{ $player->last_name }}</a></p>
    @endforeach
   

<div style="width:30%;">
    <form method="POST" action="/teams/{{$team->id}}/comments">
  {{csrf_field()}}
  <div class="form-group">
    <label for="text">Comment</label>
    <textarea name='content' class="form-control" id="content"></textarea>
    @include('partials.error-message' , ['fieldName' => 'content'])
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<br><h2>Comments</h2><br>
 @foreach($team->comments as $comment) 

<div class='card-block'>
<p style="font-size:1rem;">{{ $comment->user->name }}<p>
  <p style="font-size:1rem;">{{ $comment->content }}<p>
  <p style="font-size:0.7rem;">{{ $comment->created_at }}<p>
</div>
@endforeach
  
  @endsection