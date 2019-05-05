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
//        $this->middleware('guest');
////        $this->middleware('auth');
        // $this->middleware('role:ROLE_STUDENT');
        $this->middleware('role:ROLE_ADMIN',['except'=>'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $course = Courses::with('subjects')->where('id',$id)->first();
        return view('course.course')
            ->with('course', $course)
            ->with('subjects', $course->subjects);
    }

    public function create($id)
    {
        return view('course.courseView', compact('id'));
    }

    public function edit($id)
    {
        $course = Courses::find($id);

        return view('course.courseView', compact('course'));

    }

    protected function validator(Request $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'level' => ['string', 'max:255'],
            'imageUrl' => ['required', 'string', 'max:255']
        ]);
    }

    public function save(Request $data)
    {
        $validatedData = $data->validate([
            'name'     => 'required|regex:/^[\pL\s\-]+$/u',
            'description' => ['required', 'string', 'max:255'],
            'level' => ['string', 'max:255'],
            'imageUrl' => ['required', 'string', 'max:255']
        ]);
        if ($data['courses_id'] == 0&&$validatedData) {
            try {



                Courses::create([
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'level' => $data['level'],
                    'programs_id' => $data['programs_id'],
                    'imageUrl' => $data['imageUrl'],
                    'active' => boolval(true)
                ]);
            } catch (Exception $e) {
                return redirect()->back()->with('message-error', 'Fail to save data something went wrong!');
            }
            return redirect()->back()->with('message', 'Save your data successfully!');


        }
        else{
            try {

                Courses::where('id',$data['courses_id'])->update([
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'level' => $data['level'],
                    'programs_id' => $data['programs_id'],
                    'imageUrl' => $data['imageUrl'],
                    'active' => boolval(true)
                ]);
            } catch (Exception $e) {
                return redirect()->back()->with('message-error', 'Fail to save data something went wrong!');
            }
            return redirect()->back()->with('message', 'Update your data successfully!');
        }
    }
}
