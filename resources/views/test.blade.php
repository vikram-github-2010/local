@extends('app')

@section('content')
        
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>Twitter Id</th>
                <th>Twitter Id</th>
                <th>Author</th>
                <th>screen_name</th>
                <th>Message</th>
                <th>Location</th>
                <th>Favorite</th>
                <th>Retweet</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($arrays))
                    <tr>
                        <td>{{ $arrays['id'] }}</td>
                        <td>{{ $arrays['created_at'] }}</td>
                        <td>{{$arrays['user']['name']}}</td>
                        <td>{{$arrays['user']['screen_name']}}</td>
                        <td>{{ $arrays['text'] }}</td>
                        <td>{{$arrays['user']['location']}}</td>
                        <td>{{ $arrays['favorite_count'] }}</td>
                        <td>{{ $arrays['retweet_count'] }}</td>
                    </tr>
            @else
                <tr>
                    <td colspan="6">There are no data.</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection