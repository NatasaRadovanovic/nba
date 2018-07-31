@extends('layouts.master')
@section('content')<br>
<style>
.wrapp-form{
  width:35%;
  margin:0 auto;
}
</style>

<div class="wrapp-form">
<form method="POST" action="/login">
  {{csrf_field()}} 
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name='email' class="form-control" id="email">
    @include('partials.error-message' , ['fieldName' => 'email'])
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name='password' class="form-control" id="password">
    @include('partials.error-message' , ['fieldName' => 'password'])
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
@endsection