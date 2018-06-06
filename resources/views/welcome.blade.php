@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Kadai-Tasklist！</h1>
            {!! link_to_route('signup.get', '今すぐ登録!', null, ['class' => 'btn btn-lg btn-info']) !!}
        </div>
    </div>
@endsection
