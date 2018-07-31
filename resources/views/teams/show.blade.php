@extends('layouts.master')

<style>
   .card-block
    {
        border: 1px solid silver;
        margin-bottom: 5px;
        width: 50%;
        padding: 5px;
        border-radius: 10px;
        box-shadow: 5px 5px 5px grey;
    }
</style>
@section('content')
    
    <h2>{{ $team->name }}</h2><br>
    <p><i class="fas fa-envelope"></i> Email: {{ $team->email }}</p>
    <p>Address: {{ $team->address }}</p>
    <p>City: {{ $team->city }}</p>
    <a style="font-size:1.2rem; color:black;text-decoration:none" 
    href="/news/team/{{ $team->name }}">News <b><span style="font-size:0.9rem;">>>><span><b></a><br><br>
    
    <h2 > Players</h2>
    @foreach($team->players as $player)
    <p><a href="/players/{{ $player->id }}">{{ $player->first_name }} 
    {{ $player->last_name }}</a></p><br>
    @endforeach
   

<div style="width:30%;">
    <form method="POST" action="/teams/{{$team->id}}/comments">
  
  <div class="form-group">
    <textarea rows="4" cols="50" name='content' class="form-control" id="content" 
    placeholder="comment"></textarea>
    @include('partials.error-message' , ['fieldName' => 'content'])
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<br><h3>Comments</h3><br>
 @foreach($team->comments as $comment) 

<div class='card-block'>
<p style="font-size:1rem;">{{ $comment->user->name }}<p>
  <p style="font-size:1rem;">{{ $comment->content }}<p>
  <p style="font-size:0.7rem;">{{ $comment->created_at }}<p>
</div>
@endforeach
  
  @endsection