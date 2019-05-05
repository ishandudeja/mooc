<?php

namespace mooc\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mooc\Courses;
use mooc\StudentCourse;
use mooc\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web');

       // $this->middleware('role:ROLE_STUDENT');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {        $user=User::with('courses')->find(Auth::id());
        return view('home')->with('courses',$user->courses);
    }
}
