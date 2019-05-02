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
        $this->middleware('guest');
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
        return redirect()->action('CourseController@index', ['id' => $data['programs_id'] ]);
    }
}
