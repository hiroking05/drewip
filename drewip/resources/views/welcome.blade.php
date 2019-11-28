@extends('layouts.app')

@section('content')
    @if (Auth::check())
        @if (count($memos) > 0)
                    @include('drewip.memos', ['memos' => $memos])
        @endif
    @else
        @include('auth.register')
    @endif
@endsection