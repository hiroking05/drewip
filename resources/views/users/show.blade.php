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
            <div class='d-flex justify-content-center'>
                <p class='mr-2'>{{ $count_topics }}</p>
                <h5>topics activities</h5>
            </div>
            <div class='d-flex justify-content-center'>
                <p class='mr-2'>{{ $count_memos }}</p>
                <h5>memos activities</h5>
            </div>
            @include('user_follow.follow_button', ['user' => $user])
        </div>
    </div>
    <div class='border-bottom	mt-3'></div>
    <div>
        @include('users.followings')
    </div>
@endsection