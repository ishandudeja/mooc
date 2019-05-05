<?php

namespace mooc\Http\Controllers;

use Illuminate\Http\Request;
use mooc\Courses;
use mooc\StudentCourse;
use function Sodium\add;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_ADMIN');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $course= StudentCourse::with('courses')->groupBy('course_id')->selectRaw('sum(fee) as fee, count(id)as enroll,course_id')->get();

        return view('/admin')->with('course',$course);
    }
}
