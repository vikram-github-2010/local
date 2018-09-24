@extends('app')


@section('content')
<form method="POST" action="/posts/create" enctype="multipart/form-data">
  
  {{ csrf_field() }}
  
    <div class="form-group">
        <label for="Image">Image:</label>
        <input type="file"  name="image[]" multiple>
    </div>
    
    <div class="form-group">
        <label for="Name">User Name:</label>
        <input type="text" class="form-control" name="username" id="username">
    </div>
  
    <div class="form-group">
        <label for="post">Post:</label>
        <input type="text" class="form-control" name="posts" id="posts">
    </div>
    
  <input type="submit" class="btn btn-default">
</form>

@endsection