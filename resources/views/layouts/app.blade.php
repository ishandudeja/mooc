<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    {{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">--}}
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </h5>
         <div class="my-0 mr-md-auto font-weight-normal nav-item dropdown">

            <a class="nav-link" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"><i class="fas fa-bars"></i> Programs</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01" data-aos="fade-down" >
                @foreach (mooc\Programs::all() as $program)
                <a class="dropdown-item" href="{{'/program/'.$program->name}}">{{$program->name}}</a>
                {{--<a class="dropdown-item" href="#">Another action</a>--}}
                {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                @endforeach
            </div>
        </div>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
        <nav class="my-2 my-md-0 mr-md-3">
            @if (Route::has('login'))

                    @auth
                        <a class="p-2 text-dark" href="{{ url('/home') }}">My Learning <i class="fas fa-chalkboard-teacher"></i></a>
                    @else
                        {{--<a class="p-2 text-dark" href="{{ route('login') }}">Enrol Now</a>--}}

                        @if (Route::has('register'))
                            <a class="p-2 text-dark" href="{{ route('register') }}">Enrol Now <i class="fas fa-hand-pointer"></i></a>
                        @endif
                    @endauth

            @endif
            <a class="p-2 text-dark" href="#">Program Offered <i class="fas fa-user-graduate"></i></a>
            <a class="p-2 text-dark" href="#">Study at Mooc <i class="fas fa-university"></i></a>
            <a class="p-2 text-dark" href="#">About <i class="fas fa-address-card"></i></a>
            <a class="p-2 text-dark" href="#">Contact <i class="fas fa-at"></i></a>
            <!-- Authentication Links -->
            @guest

                <a class="p-2 text-dark" href="{{ route('login') }}">{{ __('Login') }} <i class="fas fa-user"></i></a>

                {{--@if (Route::has('register'))--}}

                    {{--<a class="p-2 text-dark" href="{{ route('register') }}">{{ __('Register') }}</a>--}}

                {{--@endif--}}
            @else

                <a id="navbarDropdown" class="p-2 text-dark dropdown-toggle" href="#" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>

            @endguest
        </nav>
    </div>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                {{--<img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">--}}
                <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Resource</a></li>
                    <li><a class="text-muted" href="#">Resource name</a></li>
                    <li><a class="text-muted" href="#">Another resource</a></li>
                    <li><a class="text-muted" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
