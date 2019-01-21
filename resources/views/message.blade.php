@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="data">
            @foreach($news as $newses)
                <p><strong>اصفهان آهن:</strong>
                    {{$newses->news}}
                </p>
            @endforeach
        </div>
        <h1>New News</h1>
        <hr />
        <form method="POST" action="sendNews">
            {{ csrf_field() }}
            News: <textarea name="content"></textarea>
            <button type="submit" name="send" class="btn btn-primary btn-lg">Save Post</button>
        </form>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js"></script>

        <script>
            var socket = io('http://EsfahanIron.test:6001')
            socket.on('chat:message', function (data) {
                console.log(data)
                // $('#data').append()
            })
        </script>

    </div>
@endsection
