@extends('layouts.app')

@section('content')
    
        <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class='text-center'>
                <h3>Title</h3>
            </div>
                    {!! Form::open(['route' => 'topics.store']) !!}
                        <div class="form-group">
                            {!! Form::textarea('name', old('name'), ['class' => 'form-control', 'rows' => '2']) !!}
                            {!! Form::submit('Ok', ['class' => 'btn btn-primary btn-block']) !!}
                        </div>
                    {!! Form::close() !!}
               
            
        </div>
    </div>
    
@endsection