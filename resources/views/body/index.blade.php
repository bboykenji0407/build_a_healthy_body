@extends('layouts/app')

@section('content')
<div calss="contaner">
    <div class="row justify-content-center" style="background-color: rgb(184, 182, 182)">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header"><span>{{ __(Auth::user()->username) }}さんの身体情報</span>
                    <div class="card-body">
                        @foreach ($bodies as $body)
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Height')}}</label>
                            <div class="col-md-3" >
                                <span class="form-control" style="border: none">{{ $body->height }}cm</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Weight')}}</label>
                            <div class="col-md-3" >
                                <span class="form-control" style="border: none">{{ $body->weight }}kg</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Body_fat_percentage')}}</label>
                            <div class="col-md-3" >
                                <span class="form-control" style="border: none">{{ $body->body_fat_percentage }}%</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Skeletal_muscle_percentage')}}</label>
                            <div class="col-md-3" >
                                <span class="form-control" style="border: none">{{ $body->skeletal_muscle_percentage }}%</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Skeletal_muscle_percentage')}}</label>
                            <div class="col-md-3" >
                                <span class="form-control" style="border: none">{{ $body->skeletal_muscle_percentage }}%</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Body_image')}}</label>
                            <div class="col-md-3" >
                                <img src="{{ asset('storage/images/' . $body->body_image) }}" style="height: 150px" style="weight: 150px">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
