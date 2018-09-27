@extends('app')

@section('content')
        
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>Twitter Id</th>
                <th>Message</th>
                <th>Favorite</th>
                <th>Retweet</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($arrays))
                    <tr>
                        <td>{{ $arrays['id'] }}</td>
                        <td>{{ $arrays['text'] }}</td>
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
</div>

</body>
@endsection