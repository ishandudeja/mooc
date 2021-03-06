@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Subject') }}</div>

                    <div class="card-body">
                        @if(isset($subject))
                            <form method="post" action="{{ route('editSubject', $subject->id) }}">
                                @method('PATCH')
                                @else
                                    <form method="POST" action="{{ route('saveSubject') }}">
                                        @endif
                                        @csrf

                                        <div class="form-group row">
                                            <label for="name"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                            <div class="col-md-6">
                                                <input id="name" type="text"
                                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                       name="name"
                                                       value="{{ isset($subject) ? $subject->name : old('name') }}"
                                                       required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="description"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                            <div class="col-md-6">
                                                <input id="description" type="text"
                                                       class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                                       name="description"
                                                       value="{{ isset($subject) ? $subject->description : old('description') }}"
                                                       required>

                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        {{--<div class="form-group row">--}}
                                        {{--<label for="level" class="col-md-4 col-form-label text-md-right">{{ __('level') }}</label>--}}

                                        {{--<div class="col-md-6">--}}
                                        {{--<input id="level" type="text" class="form-control{{ $errors->has('level') ? ' is-invalid' : '' }}" name="level" value="{{ isset($subject) ? $subject->level : old('level') }}" required autofocus>--}}

                                        {{--@if ($errors->has('level'))--}}
                                        {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('level') }}</strong>--}}
                                        {{--</span>--}}
                                        {{--@endif--}}
                                        {{--</div>--}}
                                        {{--</div>--}}

                                        <div class="form-group row">
                                            <label for="imageUrl"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('Image Url') }}</label>

                                            <div class="col-md-6">
                                                <input id="imageUrl" type="text"
                                                       class="form-control{{ $errors->has('imageUrl') ? ' is-invalid' : '' }}"
                                                       name="imageUrl"
                                                       value="{{ isset($subject) ? $subject->imageUrl : old('imageUrl') }}"
                                                       required>
                                                <input id="courses_id" type="hidden" name="courses_id"
                                                       value="{{ isset($subject) ? $subject->courses_id : $id }}">
                                                <input id="subjects_id" type="hidden" name="subjects_id"
                                                       value="{{ isset($subject) ? $subject->id : 0 }}">

                                                @if ($errors->has('imageUrl'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('imageUrl') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Save') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                    </div>
                </div>
            </div>
        </div>
        @if(session()->has('message'))
            <div class="alert alert-success mt-5">
                {{ session()->get('message') }}
            </div>
        @endif
        @if(session()->has('message-error mt-5'))
            <div class="alert alert-danger">
                {{ session()->get('message-error') }}
            </div>
        @endif
    </div>
@endsection
