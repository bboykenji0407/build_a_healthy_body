@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('編集') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('user.update', Auth::user()) }}">
                        @method('PATCH')
                        @csrf
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username', Auth::user()->username) }}" autocomplete="username" autofocus>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', Auth::user()->email) }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>
                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age', Auth::user()->age) }}" autocomplete="age" placeholder="age">
                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hobby" class="col-md-4 col-form-label text-md-right">{{ __('Hobby') }}</label>
                            <div class="col-md-6">
                                <input id="hobby" type="text" class="form-control @error('hobby') is-invalid @enderror" name="hobby" value="{{ old('hobby', Auth::user()->hobby) }}" autocomplete="hobby" placeholder="サッカー、野球など">
                                @error('hobby')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="spouse" class="col-md-4 col-form-label text-md-right">{{ __('配偶者') }}</label>
                            <div class="col-md-6">
                                <select name="spouse" id="spouse" class="form-control @error('spouse') is-invalid @enderror">
                                    <option value="">-- 選択してください --</option>
                                    @foreach (App\User::$spouses as $key => $spouse)
                                    <option value="{{ $key }}"  @if (old('spouse', Auth::user() ->spouse) == $key) selected @endif>{{ $spouse }}</option>
                                    @endforeach
                                </select>
                                @error('spouse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="children" class="col-md-4 col-form-label text-md-right">{{ __('Children') }}</label>
                            <div class="col-md-6">
                                <select name="children" id="children" class="form-control @error('children') is-invalid @enderror">
                                    <option value="">-- 選択してください --</option>
                                    @foreach (App\User::$children as $key => $child)
                                    <option value="{{ $key }}" @if (old('children', Auth::user()->children) == $key) selected @endif>{{ $child }}</option>
                                    @endforeach
                                </select>
                                @error('children')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('更新') }}
                                </button>
                                <button type="submit" class="btn btn-primary" action="{{ route('user.index')}}">戻る</button>

                            </div>
                        </div>
                        <div class="form-group row mb-0">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
