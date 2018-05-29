@extends('layouts.app')

@section('content')

<h1>id = {{ $task->id }} のタスク詳細ページ</h1>

       <table class="table table-bordered table striped">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タイトル</th>
            <td>{{ $task->title }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>

    <p>ステータス: {{ $task->status }}</p>
    <p>タスク: {{ $task->content }}</p>
    
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id, ['class' => 'btn btn-default']) !!}
    
     {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-default']) !!}
    {!! Form::close() !!}


@endsection