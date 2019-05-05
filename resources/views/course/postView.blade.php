@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Post') }}</div>

                    <div class="card-body">

                        @if(isset($post))
                            <form method="post" action="{{ route('editPost', $post->id) }}">
                                @method('PATCH')
                                @else
                                    <form method="POST" action="{{ route('savePost') }}">
                                        @endif
                                        @csrf

                                        <div class="form-group row">
                                            <label for="name"
                                                   class="col-md-4 col-form-label text-md-right">{{ __(' Post Query') }}</label>

                                            <div class="col-md-6">
                                                <input id="query" type="text"
                                                       class="form-control{{ $errors->has('query') ? ' is-invalid' : '' }}"
                                                       name="query"
                                                       value="{{ isset($post) ? $post->query : old('query') }}"
                                                       required autofocus>

                                                @if ($errors->has('query'))
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('query') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <div class="col-md-6">

                                                <input id="content_id" type="hidden" name="content_id"
                                                       value="{{ isset($content[0]->id) ? $content[0]->id : $id }}">
                                                <input id="post_id" type="hidden" name="post_id"
                                                       value="{{ isset($post) ? $post->id : 0 }}">


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
