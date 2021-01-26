<?php

namespace App\Http\Controllers;

use App\Models\User\AppliedProgram;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        if(auth()->user()->is_admin)
        {
            $appliedPrograms = AppliedProgram::all();
            
            return view('admin', compact('appliedPrograms'));
        }

        return view('home');
    }
}
