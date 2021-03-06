@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Program') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('saveProgram') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control" name="description" required>

                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="imageUrl" class="col-md-4 col-form-label text-md-right">{{ __('ImageUrl') }}</label>

                                <div class="col-md-6">
                                    <input id="imageUrl" type="text" class="form-control{{ $errors->has('imageUrl') ? ' is-invalid' : '' }}" name="imageUrl" value="{{ old('imageUrl') }}" required autofocus>

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
