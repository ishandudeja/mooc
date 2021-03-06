@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-light bg-warning ">
        <span class="navbar-brand mb-0 h1">@if (isset($program)){{ $program->name }}@endif program</span>
        <span>
         @auth
                @if(Auth::user()->hasRole('ROLE_ADMIN'))
                    <a href="{{ url('program/create/new') }}" class="btn btn-primary pull-right">
        Add Program
        </a>
                    <a href="{{ url('program/'.$program->id.'/course/create') }}" class="btn btn-primary pull-right">
        Add Course
        </a>
                @endif
            @endauth
            </span>
    </nav>
    <div class="container mt-4">
        <div class="row">

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
                                       class="btn btn-sm btn-outline-secondary">View</a>
                                    @auth
                                        @if(Auth::user()->hasRole('ROLE_ADMIN'))
                                    <a href="{{url('program/course/edit/'.$course->id)}}"
                                       class="btn btn-sm btn-outline-secondary">Edit</a>
                                            @else
                                            <a href="{{url('program/course/'.$course->id.'/enroll')}}"
                                               class="btn btn-sm btn-outline-secondary">Buy Now</a>
                                        @endif
                                    @endauth
                                </div>
                                <small class="text-muted">$ {{$course->fee}}</small>
                            </div>
                        </div>
                    </div>
                </div>



            @endforeach
        </div>
    </div>
@endsection
