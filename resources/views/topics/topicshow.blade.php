@extends('layouts.app')

@section('content')
    <div class="row border-bottom">
        <aside>
            <div class="card">
                <div class="card-body">
                    <img class="rounded img-fluid" src="{{ Gravatar::src($user->email, 100) }}" alt="">
                </div>
            </div>
            <div class='mt-3 mb-3'>
                {!! link_to_route('memos.create', '+', [$topic->id], ['class' => 'btn btn-lg btn-block btn-primary']) !!}
            </div>
        </aside>
        <div class='ml-4'>
            <h3>{{$topic->name}}</h3>
            @if (Auth::id() == $topic->user_id)
                    {!! Form::open(['route' => ['topics.destroy', $topic->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-primary btn-sm']) !!}
                    {!! Form::close() !!}
            @endif
        </div>
    </div>
    <div>
        @include('drewip.memos')
    </div>
@endsection