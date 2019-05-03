<?php

namespace mooc\Http\Controllers;

use Illuminate\Http\Request;
use mooc\Courses;

class CourseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
        $this->middleware('role:ROLE_STUDENT');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $course = Courses::with('subjects')->find($id)->first();
        return view('course.course')
            ->with('course',$course)
            ->with('subjects', $course->subjects);
    }

    public function create($id){
        return view('course.courseView');
    }

    public function edit($id){
        return view('course.courseView');
    }
    public function save(Request $data){

        return redirect()->action('HomeController@index');
    }
}
