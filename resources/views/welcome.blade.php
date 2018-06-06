@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-md-4">
            </aside>
            <div class="col-xs-8">
                @if (count($tweets) > 0)
                    @include('tweets.tweets', ['tweets' => $tweets])
                @endif
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Kadai Tweets</h1>
                {!! link_to_route('signup.get', '今すぐ登録!', null, ['class' => 'btn btn-lg btn-info']) !!}
            </div>
        </div>
    @endif
@endsection