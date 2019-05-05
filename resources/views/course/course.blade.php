@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-light bg-warning ">
        <span class="navbar-brand mb-0 h1">@if (isset($course)){{ $course->name }}@endif Course </span>
        <span>
            @auth
                @if(Auth::user()->hasRole('ROLE_ADMIN'))
                    <a href="{{ url('program/course/'.$course->id.'/subject/create') }}" class="btn btn-primary
pull-right">
            Add Subject
        </a>
                @endif
            @endauth
         </span>
    </nav>
    <div class="container mt-4">
        <div class="row">

            @foreach ($subjects as $subject)

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{$subject->imageUrl}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $subject->name }}</h5>
                            <p class="card-text">
                                {{ $subject->description }}
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    @auth
                                        @if(Auth::user()->hasPurchase($course->id))
                                            <a href="{{ url('program/course/subject/'.$subject->id) }}"
                                               class="btn btn-sm btn-outline-secondary">Get Start</a>
                                        @endif
                                        @if(Auth::user()->hasRole('ROLE_ADMIN'))
                                                <a href="{{ url('program/course/subject/'.$subject->id) }}"
                                                   class="btn btn-sm btn-outline-secondary">view</a>
                                            <a href="{{url('program/course/subject/edit/'.$subject->id)}}"
                                               class="btn btn-sm btn-outline-secondary">Edit</a>
                                        @endif
                                    @endauth
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
