<?php

namespace mooc\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use mooc\Courses;
use mooc\StudentCourse;

class EnrollmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_STUDENT');
    }

    public function index($id){
        $course=Courses::find($id);
        return view('course.enroll')->with('course', $course);
    }

    public function enroll(Request $data){
        try {
           $exist= StudentCourse::where([
                ['user_id', '=', Auth::id()],
                ['course_id', '=', $data['course_id']],
            ])->first();

           if(!isset($exist)) {
               StudentCourse::create([
                   'sessionStart' => Carbon::now(),
                   'sessionEnd' => Carbon::now()->addMonths(2),
                   'fee' => $data['fee'],
                   'user_id' => Auth::id(),
                   'course_id' => $data['course_id'],
                   'rating' => 0,
                   'active' => boolval(true)
               ]);
           }
           else{
               return  redirect('/home')->with('message', 'This course already in you learning list');
           }
        }
        catch (Exception $e){
            return  redirect('/home')->with('message-error', 'Fail to save data something went wrong!');
        }
        return  redirect('/home')->with('message', 'Save your data successfully!');
    }
}
