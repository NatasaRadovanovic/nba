@extends('layouts.master')
@section('content')<br>
<style>
.wrapp-form{
  width:50%;
  margin:0 auto;
}
</style>

<div class="wrapp-form">
<form method="POST" action="/register">
  {{csrf_field()}} 
  <div class="form-group">
    <label for="name">Name</label>
    <input name='name' type="text" class="form-control" id="name">
    @include('partials.error-message' , ['fieldName' => 'name'])
  </div>
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

  <div class="form-group">
    <label for="password">Confirm password</label>
    <input type="password" name='confirm' class="form-control" id="confirm">
    @include('partials.error-message' , ['fieldName' => 'confirm'])
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
@endsection