@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col">
                                Course
                            </div>
                            <div class="col">
                                Earning
                            </div>
                            <div class="col">
                                Enrolment
                            </div>

                        </div>

                        @foreach($course as $data)
                            <div class="row">
                                <div class="col">
                                    {{$data->courses->name}}
                                </div>
                                <div class="col">
                                    $ {{$data->fee}}
                                </div>
                                <div class="col">
                                    {{$data->enroll}}
                                </div>

                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
