@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <img class="rounded img-fluid" src="{{ Gravatar::src($user->email, 250) }}" alt="">
                </div>
            </div>
        </aside>
        <div class="col-sm-9">
            <h3>{{ $user->name }}</h3>
        </div>
    </div>
    <div class='border-bottom	mt-3'></div>
@endsection