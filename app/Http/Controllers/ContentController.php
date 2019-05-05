<?php

namespace mooc\Http\Controllers;

use Illuminate\Http\Request;
use mooc\OnlineContent;

class ContentController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
        // $this->middleware('role:ROLE_STUDENT');
    }

    public function create($id){
        return view('course.contentView',compact('id'));
    }


    public function edit($id)
    {
        $content = OnlineContent::find($id);

        return view('course.contentView', compact('content'));

    }

    protected function validator(Request $data)
    {
        return Validator::make($data, [
            'caption' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],

            'url' => ['required', 'string', 'max:255']
        ]);
    }

    public function save(Request $data)
    {
        if ($data['content_id'] == 0) {
            try {
                OnlineContent::create([
                    'caption' => $data['caption'],
                    'description' => $data['description'],
                    'subjects_id' => $data['subjects_id'],
                    'url' => $data['url'],
                    'active' => boolval(true)
                ]);
            } catch (Exception $e) {
                return redirect()->back()->with('message-error', 'Fail to save data something went wrong!');
            }
            return redirect()->back()->with('message', 'Save your data successfully!');


        }
        else{
            try {

                OnlineContent::where('id',$data['subjects_id'])->update([
                    'caption' => $data['caption'],
                    'description' => $data['description'],
                    'subjects_id' => $data['subjects_id'],
                    'url' => $data['url'],
                    'active' => boolval(true)
                ]);
            } catch (Exception $e) {
                return redirect('courseList')->back()->with('message-error', 'Fail to save data something went wrong!');
            }
            return redirect()->back()->with('message', 'Update your data successfully!');
        }
    }
}
