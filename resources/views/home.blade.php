@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ログイン成功</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    ログインできました！
                    <span><a href="{{ route('user.index')}}">プロフィールページへ</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
