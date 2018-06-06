@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Kadai Tasklist</h1>
                {!! link_to_route('signup.get', '新規登録する', null, ['class' => 'btn btn-lg btn-info']) !!}
            </div>
        </div>
    @endif
@endsection