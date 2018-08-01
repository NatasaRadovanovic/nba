@extends('layouts.master')
@section('content')<br>
<style>
.wrapp-form{
  width:35%;
  margin:0 auto;
}

h2{
    text-align:center;
    margin-bottom:20px;
}
</style>

<h2>Create news</h2>

<div class="wrapp-form">
<form method="POST" action="/news">
  {{csrf_field()}} 
  <div class="form-group">
    <label for="title">Title</label>
    <input name='title' type="text" class="form-control" id="title">
    @include('partials.error-message' , ['fieldName' => 'title'])
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea  rows="6" cols="50" name='content' class="form-control" id="content"></textarea>
    @include('partials.error-message' , ['fieldName' => 'content'])
  </div>

  @if(count($teams))
<div class="form-group">
  <label for="teams[]">Teams</label>
  @foreach($teams as $team)
  <input name='teams[]' type="checkbox" class="form-control" id="team" 
  value="{{ $team->id }}"> {{ $team->name }} <br>
  @endforeach
 </div>
@endif
  <button type="submit" class="btn btn-primary">Send</button>
</form>
</div>

@endsection