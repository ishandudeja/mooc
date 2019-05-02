<?php

namespace mooc\Http\Controllers;

use Illuminate\Http\Request;
use mooc\Programs;

class ProgramController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
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

    public function save(array $data){

        return redirect()->action('ProgramController@index', ['name' => $data['name'] ]);
    }
}
