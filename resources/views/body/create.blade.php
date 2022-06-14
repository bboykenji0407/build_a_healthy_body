@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('身体情報登録') }}</div>
                <div class="card-body">
                    <form action="{{route('Bodies.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group row">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <label for="hight" class="col-md-4 col-form-label text-md-right">{{__('Height')}}</label>
                            <div class="col-md-6">
                                <input id="height" type="text" class="form-control @error('height') is-invalid @enderror" name="height" value="{{ old('身長') }}" autocomplete="height" placeholder="height">
                                @error('height')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="weight" class="col-md-4 col-form-label text-md-right">{{ __('Weight') }}</label>
                            <div class="col-md-6">
                                <input id="weight" type="text" class="form-control @error('weight') is-invalid @enderror" name="weight" value="{{ old('体重') }}" autocomplete="age" placeholder="weight">
                                @error('weight')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="body_fat_percentage" class="col-md-4 col-form-label text-md-right">{{ __('Body_fat_percentage') }}</label>
                            <div class="col-md-6">
                                <input id="body_fat_percentage" type="text" class="form-control @error('body_fat_percentage') is-invalid @enderror" name="body_fat_percentage" value="{{ old('body_fat_percentage') }}" autocomplete="body_fat_percentage" placeholder="body_fat_percentage">
                                @error('body_fat_percentage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="skeletal_muscle_percentage" class="col-md-4 col-form-label text-md-right">{{ __('Skeletal_muscle_percentage') }}</label>
                            <div class="col-md-6">
                                <input id="skeletal_muscle_percentage" type="text" class="form-control @error('skeletal_muscle_percentage') is-invalid @enderror" name="skeletal_muscle_percentage" value="{{ old('skeletal_muscle_percentage') }}" autocomplete="skeletal_muscle_percentage" placeholder="skeletal_muscle_percentage">
                                @error('skeletal_muscle_percentage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label for="body_image" class="col-md-4 col-form-label text-md-right">{{__('Body_image')}}</label><input type="file" name="img" accept=".png,.jpg,.jpeg,image/png,image/jpg">
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('更新') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="{{route('user.index')}}">戻る</a>
@endsection
