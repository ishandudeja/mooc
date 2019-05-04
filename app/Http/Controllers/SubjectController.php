<?php

namespace mooc\Http\Controllers;

use Illuminate\Http\Request;
use mooc\Subjects;

class SubjectController extends Controller
{
    public function index($id)
    {
        $subject = Subjects::with('onlineContent')->where('id',$id)->first();
        return view('course.subject')
            ->with('subject',$subject)
            ->with('contents', $subject->onlineContent);
    }
    public function create($id){
        return view('course.subjectView',compact('id'));
    }


    public function edit($id)
    {
        $subject = Subjects::find($id);

        return view('course.subjectView', compact('subject'));

    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],

            'imageUrl' => ['required', 'string', 'max:255']
        ]);
    }

    public function save(Request $data)
    {
        if ($data['subjects_id'] == 0) {
            try {
                Subjects::create([
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'courses_id' => $data['courses_id'],
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

                Subjects::where('id',$data['subjects_id'])->update([
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'courses_id' => $data['courses_id'],
                    'imageUrl' => $data['imageUrl'],
                    'active' => boolval(true)
                ]);
            } catch (Exception $e) {
                return redirect('courseList')->back()->with('message-error', 'Fail to save data something went wrong!');
            }
            return redirect()->back()->with('message', 'Update your data successfully!');
        }
    }
}
