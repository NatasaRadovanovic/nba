@extends('layouts.master')
@section('content')
    
    <p>{{ $team->name }}<p>
    <p>{{ $team->email }}<p>
    <p>{{ $team->address }}<p>
    <p>{{ $team->city }}<p><br>
    
    <h3>Igraci</h3>
    @foreach($team->players as $player)
    <p><a href="/players/{{ $player->id }}">{{ $player->first_name }} 
    {{ $player->last_name }}</a></p>
    @endforeach
  
  @endsection