@extends('app')

@section('content')
<div class="container">
      <form action="/uploads" method="post" enctype="multipart/form-data">
     
    {{ csrf_field() }}
     
    <!--<div class="form-group">-->
     
    <!--<label for="Product Name">Product Name</label>-->
     
    <!--<input type="text" name="name" class="form-control"  placeholder="Product Name" >-->
     
    <!--</div>-->
     
    <!--<label for="Product Name">Product photos (can attach more than one):</label>-->
     
    <!--<br />-->
     
    <input type="file"  name="photo[]" multiple/>
     
    <br /><br />
     
    <input type="submit" class="btn btn-primary" value="Upload" />
     
    </form>
</div>

@endsection