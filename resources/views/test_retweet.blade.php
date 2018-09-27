@extends('app')

@section('content')
        
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>Twitter Id</th>
                <th>ReTwwet Message</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($retwitter))
                @foreach($retwitter as $twiter)
                    <tr>
                        <td>{{ $twiter['id'] }}</td>
                        <td>{{ $twiter['text'] }}</td>
                        </td>
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