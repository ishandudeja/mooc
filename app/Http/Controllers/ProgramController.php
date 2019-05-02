<?php

namespace mooc\Http\Controllers;

use Illuminate\Http\Request;
use mooc\Http\Controllers\Controller;

class ProgramController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('programView');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['string','min:10'],
            'imageUrl' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \mooc\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'imageUrl' => Hash::make($data['imageUrl']),
        ]);
    }
}
