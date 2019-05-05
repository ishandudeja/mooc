@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Subject Content') }}</div>

                    <div class="card-body">
                        @if(isset($content))
                            <form method="post" action="{{ route('editContent', $content->id) }}">
                                @method('PATCH')
                                @else
                                    <form method="POST" action="{{ route('saveContent') }}">
                                        @endif
                                        @csrf

                                        <div class="form-group row">
                                            <label for="name"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('Caption') }}</label>

                                            <div class="col-md-6">
                                                <input id="caption" type="text"
                                                       class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}"
                                                       name="caption"
                                                       value="{{ isset($content) ? $content->caption : old('caption') }}"
                                                       required autofocus>

                                                @if ($errors->has('caption'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('caption') }}</strong>
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
                                                       value="{{ isset($content) ? $content->description : old('description') }}"
                                                       required>

                                                @if ($errors->has('description'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="imageUrl"
                                                   class="col-md-4 col-form-label text-md-right">{{ __('Url') }}</label>

                                            <div class="col-md-6">
                                                <input id="url" type="text"
                                                       class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}"
                                                       name="url"
                                                       value="{{ isset($content) ? $content->url : old('url') }}"
                                                       required>
                                                <input id="subjects_id" type="hidden" name="subjects_id"
                                                       value="{{ isset($content) ? $content->subjects_id : $id }}">
                                                <input id="content_id" type="hidden" name="content_id"
                                                       value="{{ isset($subject) ? $subject->id : 0 }}">

                                                @if ($errors->has('url'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('url') }}</strong>
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
