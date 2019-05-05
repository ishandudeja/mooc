@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-light bg-warning ">
        <span class="navbar-brand mb-0 h1">@if (isset($content)){{ $content->caption }}@endif  </span>
        <span>
         <a href="{{ url('program/course/subject/content/'.$content->id.'/post/create') }}" class="btn btn-primary
pull-right">
            Create post
        </a>
        </span>
    </nav>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-6 box-shadow">

                    <div class="card-body">
                        <iframe width="690" height="315" src="{{$content->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>

                        <h5 class="card-title">{{ $content->caption }}</h5>
                        <p class="card-text">
                            {{ $content->description }}
                        </p>

                    </div>
                </div>
            </div>

        </div>
        <div  class="row mt-3">
            <div class="col-md-8">
                <div class="card" style="width: 46rem;">
                    <div class="card-header">
                        Posts
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($posts as $post)
                            <li class="list-group-item bg-info">
                                <div class="row">
                                    <div class="col">
                                        {{ $post->query }}
                                    </div>
                                    <div class="col-1">
                                        <a href="{{ url('program/course/subject/content/post/edit/'.$post->id) }}" class="btn btn-sm text-light">
                                            edit
                                        </a>
                                    </div>
                                </div>


                            </li>
                            @foreach (\mooc\PostComments::where('post_id',$post->id)->get()   as $comment)
                                <div class="card" style="width: 30rem;">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item {{$comment->postType_id==2? 'bg-success':''}} ">{{$comment->comment}}</li>

                                    </ul>
                                </div>
                            @endforeach

                        @endforeach


                    </ul>
                </div>

            </div>
        </div>
    </div>
@endsection
