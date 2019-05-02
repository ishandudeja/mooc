@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-light bg-warning ">
        <span class="navbar-brand mb-0 h1">@if (isset($program)){{ $program->name }}@endif program
        <a href="{{ url('program/create') }}" class="btn btn-primary
pull-right">
            Add a new course
        </a></span>
    </nav>
<div class="container mt-4">
    <div class="row">

    @foreach ($courses as $course)

        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $course->name }}</h5>
                    <p class="card-text">
                        {{ $course->description }}
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{ url('program/course/'.$course->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
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
