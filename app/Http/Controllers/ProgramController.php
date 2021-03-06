<?php

namespace mooc\Http\Controllers;

use Illuminate\Http\Request;
use mooc\Programs;

class ProgramController extends Controller
{
    public function __construct()
    {
      // $this->middleware('guest');
       //$this->middleware('auth');
        $this->middleware('role:ROLE_ADMIN',['except'=>'index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($name)
    {
        $program =Programs::with('courses')
            ->whereName(urldecode($name))
            ->first();
        return view('course.program')
            ->with('program', $program)
            ->with('courses', $program->courses);
    }

    public function create(){
        return view('course.programView');
    }

    public function edit($id){
        return view('course.programView');
    }

    protected function validator(Request $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string',  'max:255'],
            'imageUrl' => ['required', 'string'],
        ]);
    }
    public function save(Request $data){

        $validatedData = $data->validate([
            'name'     => 'required|regex:/^[\pL\s\-]+$/u',
            'description' => ['required', 'string', 'max:255'],
            'imageUrl' => ['required', 'string', 'max:255']
        ]);
        if($validatedData) {
            try {
                Programs::create([
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'imageUrl' => $data['imageUrl'],
                    'active' => boolval(true)
                ]);
            } catch (Exception $e) {
                return redirect()->back()->with('message-error', 'Fail to save data something went wrong!');
            }
            return redirect()->back()->with('message', 'Save your data successfully!');
        }
       //return redirect()->action('HomeController@index');
    }
}
