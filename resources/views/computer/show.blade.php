@extends('app')

@section('content')
    @foreach($post as $post)
    
        <div class="col-sm-4">
                <img style="height:200px;" src="/storage/post/{{$post->image}} " >
                <div class="caption" style="height: 150px;">
                   <h2>{{$post->created_at->diffForHumans()}}</h2> 
                  <h2 >{{$post->user_name}}</h2>
                  <h3>{{$post->post}}</h3>
                </div>
        </div>
    
    @endforeach
        
        <form method="POST" action="/comments">
  
              {{ csrf_field() }}
              
                <div class="form-group">
                    <label for="Name">Name:</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
              
                <div class="form-group">
                    <label for="post">Post:</label>
                    <input type="text" class="form-control" name="posts" id="posts">
                </div>
                
              <input type="submit" class="btn btn-default">
        </form>
@endsection



  