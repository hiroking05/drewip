@extends('layouts.app')

@section('content')
    
        <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class='text-center'>
                <h3>Memo</h3>
            </div>
                @if (Auth::id() == $topic->user_id)
                    {!! Form::open(['route' => ['memos.store' , $topic->id]]) !!}
                        <div class="form-group">
                            {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                            {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                        </div>
                    {!! Form::close() !!}
                @endif
        </div>
    </div>
@endsection