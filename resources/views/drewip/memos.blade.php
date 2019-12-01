<ul class="list-unstyled">
    @foreach ($memos as $memo)
        <li class="media mb-3 border-bottom">
            <div class="media-body mt-5 mb-5">
                <div class='float-right'>
                    <img class="rounded img-fluid" src="{{ Gravatar::src($user->email, 30) }}" alt="">
                    <p>{!! nl2br(e($user->name)) !!}</p>
                    <P>{{ $memo->created_at }}</P>
                    @if (Auth::id() == $memo->user_id)
                    {!! Form::open(['route' => ['memos.destroy', $memo->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-primary btn-sm']) !!}
                    {!! Form::close() !!}
                    @endif
                </div>
                <div>
                    <h2>{{ $topic->name }}</h2>
                    <p class="mb-0">{!! nl2br(e($memo->content)) !!}</p>
                </div>
            </div>
        </li>
    @endforeach
</ul>
{{ $memos->links('pagination::bootstrap-4') }}