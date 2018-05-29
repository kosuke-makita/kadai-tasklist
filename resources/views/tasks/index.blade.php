@extends('layouts.app')

@section('content')

 <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
    <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タイトル</th>
                    <th>タスク</th>
                </tr>
            </thead>
    
        <tr>
            @foreach ($tasks as $task)
               <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->status }} > {{ $task->content }}</td>
               <td>{{ $task->title }}</td>
                <td>{{ $task->content }}</td>
            @endforeach
        </tr>
    @endif
    
    {!! link_to_route('tasks.create', '新規タスクの投稿', null, ['class' => 'btn btn-info']) !!}

@endsection