@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-light bg-warning ">
        <span class="navbar-brand mb-0 h1">@if (isset($subject)){{ $subject->name }}@endif Subject </span>
        <span>
         <a href="{{ url('program/course/subject/'.$subject->id.'/content/create') }}" class="btn btn-primary
pull-right">
            Add Content
        </a>
        </span>
    </nav>
    <div class="container mt-4">
        <div class="row">

            @foreach ($contents as $content)

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">

                       <div class="card-body">
                           <iframe width="310" height="315" src="{{$content->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                           </iframe>

                            <h5 class="card-title">{{ $content->caption }}</h5>
                            <p class="card-text">
                                {{ $content->description }}
                            </p>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ url('program/course/subject/content'.$content->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                                    <a href="{{url('program/course/subject/content/edit/'.$content->id)}}" class="btn btn-sm btn-outline-secondary">Edit</a>
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
