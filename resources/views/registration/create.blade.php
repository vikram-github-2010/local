
@extends('app')


@section('content')

<div class="col-sm-8 blog-main">
<h1>Register a new post with user id</h1>
<hr>
<form method="POST" action="/register">
    
    {{ csrf_field() }}
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" id="email"/>
  </div>
  
  <div class="form-group">
    <label for="password">Password:</label>
    <input  type="password" class="form-control" name="password" id="password"/>
  </div>
  
   <div class="form-group">
    <label for="password_confirmation">Password Confirmation:</label>
    <input  type="password" class="form-control" name="password_confirmation" id="password_confirmation"/>
  </div>
  
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Register</button>
  </div>
</form>

</div>

@endsection