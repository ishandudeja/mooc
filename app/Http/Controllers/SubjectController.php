<?php

namespace mooc\Http\Controllers;

use Illuminate\Http\Request;
use mooc\Subjects;

class SubjectController extends Controller
{
    public function index($id)
    {
        $subject = Subjects::with('onlineContent')->find($id)->first();
        return view('course.subject')
            ->with('subject',$subject)
            ->with('online_contents', $subject->online_contents);
    }
}
