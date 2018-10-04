@extends('app')

@section('content')
            
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>Twitter Id</th>
                <th>Name</th>
                <th>Message</th>
                <th>Location</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($tweets))
            
                @foreach($tweets['statuses'] as $tweet)
                    <tr>
                       <td>{{$tweet['id']}}</td>
                       <td>{{$tweet['user']['name']}}</td>
                       <td>{{$tweet['text']}}</td>
                       <td>{{$tweet['user']['location']}}</td>
                       </tr>
                @endforeach
                
            @else
                <tr>
                    <td colspan="6">There are no data.</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection


