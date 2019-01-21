@extends('layouts.app')

@section('content')
    <div id="data" class="container">
        <div>
            @foreach($news as $newses)
                <p><strong>اصفهان آهن</strong>:
                    {{$newses->news}}
                </p>
                @endforeach
        </div>
        <h1>New News</h1>
        <hr />
        <form method="POST" action="sendNews">
            {{ csrf_field() }}
            {{--<div class="form-group">--}}
                {{--<label for="company_name">Company Name:</label>--}}
                {{--<input type="text" name="company">--}}
            {{--</div>--}}

            <div class="form-group">
                <label for="news">نوشتن خبر</label>
                <textarea name="news" placeholder="Write something amazing..."></textarea>
            </div>
            <button type="submit" name="send" class="btn btn-primary btn-lg">Save Post</button>
        </form>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript"
                src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js"></script>

        <script>
            var socket = io('http://EsfahanIron.test:6001')
            socket.on('chat:news', function (data) {
                // console.log(data)
                $('#data').append(data.news)
            })
        </script>
    </div>

@endsection
