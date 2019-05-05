<?php

namespace mooc\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mooc\OnlineContent;
use mooc\PostComments;
use mooc\PostContent;
use mooc\Posts;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('guest');
        //$this->middleware('role:ROLE_STUDENT');
    }

    public function index($id){
        $content = OnlineContent::with('posts')->where('id',$id)->first();
        return view('course.post')
            ->with('content',$content)
            ->with('posts', $content->posts);

    }

    public function create($id){
        return view('course.postView',compact('id'));
    }


    public function edit($id)
    {
        $post = Posts::with('postContent')->find($id);

        return view('course.postView')->with('post',$post)->with('content',$post->postContent);

    }

    protected function validator(Request $data)
    {
        return Validator::make($data, [
            'query' => ['required', 'string', 'max:255'],

        ]);
    }

    public function save(Request $data)
    {
        if ($data['post_id'] == 0) {
            try {
              $post=  Posts::create([
                    'query' => $data['query'],
                    'assignTo' => 1,
                    'createdBy' => Auth::id(),
                    'active' => boolval(true)
                ]);

              PostContent::create([
                 'content_id'=>$data['content_id'],
                 'post_id'=>$post->id,
                 'active'=>boolval(true)
              ]);
            } catch (Exception $e) {
                return redirect('program/course/subject/content/'.$data['content_id'])->with('message-error', 'Fail to save data something went wrong!');
            }
            return redirect('program/course/subject/content/'.$data['content_id'])->with('message', 'Save your data successfully!');


        }
        else{
            try {

                Posts::where('id',$data['post_id'])->update([
                    'query' => $data['query'],
                    'assignTo' => 1,
                    'createdBy' => Auth::id(),
                    'active' => boolval(true)
                ]);
            } catch (Exception $e) {
                return redirect('program/course/subject/content/'.$data['content_id'])->with('message-error', 'Fail to save data something went wrong!');
            }
            return redirect('program/course/subject/content/'.$data['content_id'])->with('message', 'Update your data successfully!');
        }
    }


}
