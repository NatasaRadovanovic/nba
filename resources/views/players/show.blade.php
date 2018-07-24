@extends('layouts.master')
@section('content')

    <p><a href="/teams/{{ $player->team->id }}">{{ $player->team->name}}</a></p>
    <p>{{ $player->first_name }}</p>  <p>{{ $player->last_name }}</p>
    <p>{{ $player->email }}</p>
   
    @endsection