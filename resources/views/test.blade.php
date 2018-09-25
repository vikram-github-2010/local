@extends('app')

@section('content')
        <div class="container">
            <div class="row">
                @foreach($twiter as $key=>$value)
                
                    {{$value['id']}}
                    
                @endforeach
            </div>
   
        </div>
@endsection