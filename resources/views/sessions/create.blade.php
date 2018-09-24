
@extends('app')


@section('content')

<div class="col-sm-8 blog-main">
<h1>sign in user id</h1>
<hr>
<form method="POST" action="/login">
    
    {{ csrf_field() }}
  
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" id="email"/>
  </div>
  
  <div class="form-group">
    <label for="password">Password:</label>
    <input  type="password" class="form-control" name="password" id="password"/>
  </div>
  
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Log In</button>
  </div>
</form>

</div>

@endsection