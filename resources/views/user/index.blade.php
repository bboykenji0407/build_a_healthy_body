@extends('layouts/app')

@section('content')
    {{'toppage'}}
    {{-- <input class="form-control" value="{{ $user->username }}"> --}}
    <div>
        <span>{{ $user->username }}</span>
        <span>{{ $user->age }}</span>
        <span>{{ $user->hobby }}</span>
        <span>{{ $user->spouse }}</span>
        <span>{{ $user->children }}</span>
        <a href="{{ route('user.edit', $user )}}">編集</a>
    </div>
@endsection
