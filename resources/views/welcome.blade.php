@extends('layouts.app')

@section('content')
    @if (Auth::check())
        @if (count($memos) > 0)
             @include('drewip.welcomememos' ,['memos' => $memos])
        @endif
    @else
        @include('auth.register')
    @endif
@endsection