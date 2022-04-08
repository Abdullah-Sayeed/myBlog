<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      //  \Auth::logout();
        return view('home');
        return view('admin.dashboard.dashboard');

    }
    public function home1()
    {
        // \Auth::logout();
        dd('home1');
        return view('admin.dashboard.dashboard');

    }
    public function home2()
    {
      //  \Auth::logout();
      dd('home2');
        return view('admin.dashboard.dashboard');

    }
    public function home3()
    {
      //  \Auth::logout();
      dd('home3');

     
        return view('admin.dashboard.dashboard');

    }
    public function home4()
    {
      //  \Auth::logout();
      dd('home4');

     
        return view('admin.dashboard.dashboard');

    }


}
