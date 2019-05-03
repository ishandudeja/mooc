@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-light bg-warning ">
        <span class="navbar-brand mb-0 h1">@if (isset($course)){{ $course->name }}@endif Course
        <a href="{{ url('program/'.$course->id.'/course/create') }}" class="btn btn-primary
pull-right">
            Add a new course
        </a></span>
    </nav>
    <div class="container mt-4">
        <div class="row">

            @foreach ($subjects as $subject)

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $subject->name }}</h5>
                            <p class="card-text">
                                {{ $subject->description }}
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ url('program/course/'.$subject->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                                    <a href="{{url('program/course/edit/'.$subject->id)}}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>



            @endforeach
        </div>
    </div>
@endsection
