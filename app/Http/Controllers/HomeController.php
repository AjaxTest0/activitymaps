<?php

namespace App\Http\Controllers;

use Auth;
use Bitfumes\Multiauth\Model\Admin;
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
        if(Auth::user()->roles->first()->name == 'super'){
            return view('dashboard.create');
        }

        return view('welcome');
    }
}
