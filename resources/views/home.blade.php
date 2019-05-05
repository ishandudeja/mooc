@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-light bg-warning ">
        <span class="navbar-brand mb-0 h1">My Learning  </span>
    </nav>


    <div class="container mt-4">
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
        <div class="row">

            @if(!isset($courses[0]))
            <h3>There is no course in you learning! Thanks for Enrollment</h3>
            @endif

            @foreach ($courses as $course)
                                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                             data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail"
                             src="{{$course->imageUrl  }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->name }}</h5>
                            <p class="card-text">
                                {{ $course->description }}
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ url('program/course/'.$course->id)}}"
                                       class="btn btn-sm btn-outline-secondary">Start Learning</a>

                                </div>
                                <small class="text-muted">Purchased</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>




@endsection
