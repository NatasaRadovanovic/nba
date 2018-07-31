@extends('layouts.master')

<style>
    p a{
        color:#003366;
        text-decoration:none;
    }

</style> 

@section('content')  
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">NBA</h1>
    <p class="lead">The official site of the National Basketball Association</p>
  </div>
</div>
    <h2>Teams:</h2><br>

    @foreach($teams as $team)
        <p><a href="/teams/{{ $team->id }}">{{ $team->name }}<a><p>
    @endforeach
 
 @endsection