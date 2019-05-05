<?php

namespace mooc\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('guest');
        //$this->middleware('role:ROLE_STUDENT');
    }
}
