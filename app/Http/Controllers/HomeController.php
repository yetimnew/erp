<?php

namespace App\Http\Controllers;



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
        // Role::create(['name'=>'adminstrator']);
        // Permisssion::create(['name'=>'create truck']);
        return view('home');
    }
}
