<?php

namespace mooc\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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
       // $this->middleware('role:ROLE_STUDENT');
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

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string',  'max:255'],
            'level'=>['string',  'max:255'],
            'imageUrl' => ['required', 'string','max:255']
        ]);
    }
    public function save(Request $data){

        try {
            Courses::create([
                'name' => $data['name'],
                'description' => $data['description'],
                'level'=>$data['level'],
                'programs_id'=>Input::get('id', '1'),
                'imageUrl' => $data['imageUrl'],
                'active' => boolval(true)
            ]);
        }
        catch (Exception $e){
            return  redirect()->back()->with('message-error', 'Fail to save data something went wrong!');
        }
        return  redirect()->back()->with('message', 'Save your data successfully!');

        return redirect()->action('HomeController@index');
    }
}
