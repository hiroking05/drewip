@extends('layouts.app')

@section('content')
        
        <div class='mt-5'>
                <a href="http://da04082d2c5b4f3ab3b8fd39c433f0e7.vfs.cloud9.us-east-1.amazonaws.com/users/create" class="btn btn-block btn-primary">Create a new topic</a>
        </div>
        
        @include('drewip.topics')
@endsection
