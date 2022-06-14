@extends('layouts/app')

@section('content')
    <div calss="contaner">
        <div class="row justify-content-center" style="background-color: rgb(184, 182, 182)">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">{{ __(Auth::user()->username) }}さんのプロフィール</span>
                            <span style="margin-left: 250px"><a href="{{route('Bodies.create')}}">身体情報の登録</a></span>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                <div class="col-md-3" >
                                    <span class="form-control" style="border: none" >{{ Auth::user()->username }}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>
                                <div class="col-md-3">
                                    <span class="form-control" style="border: none">{{ Auth::user()->age }}歳</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Hobby') }}</label>
                                <div class="col-md-3">
                                    <span class="form-control" style="border: none">{{ Auth::user()->hobby }}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Spouse') }}</label>
                                <div class="col-md-3">
                                    @if (Auth::user()->spouse == 1)
                                        <span class="form-control" style="border: none">無</span>
                                    @elseif (Auth::user()->spouse == 2)
                                        <span class="form-control" style="border: none">有</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Children') }}</label>
                                <div class="col-md-3">
                                @if (Auth::user()->children == 1)
                                    <span class="form-control" style="border: none">無</span>
                                @elseif (Auth::user()->children == 2)
                                    <span class="form-control" style="border: none">1人</span>
                                @elseif (Auth::user()->children == 3)
                                    <span class="form-control" style="border: none">2人</span>
                                @elseif (Auth::user()->children == 4)
                                    <span class="form-control" style="border: none">3人</span>
                                @elseif (Auth::user()->children == 5)
                                    <span class="form-control" style="border: none">4人以上</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
