<ul class="media-list">
@foreach ($tweets as $tweet)
    <?php $user = $tweet->user; ?>
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
        </div>
        <div class="media-body">
            <div>
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $tweet->created_at }}</span>
            </div>
            <div>
                <p>{!! nl2br(e($tweet->content)) !!}</p>
            </div>
            <div>
                @if (Auth::user()->id == $tweet->user_id)
                    {!! Form::open(['route' => ['tweets.destroy', $tweet->id], 'method' => 'delete']) !!}
                        {!! Form::submit('削除', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                @endif
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $tweets->render() !!}