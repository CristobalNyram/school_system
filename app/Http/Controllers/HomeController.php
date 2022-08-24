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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $variables=[
            'menu'=>'dashboard',
            'title_page'=>'dashboard',


        ];
        return view('dashboard')->with($variables);
    }
    public function home()
    {
        $variables=[
            'menu'=>'dashboard',
            'title_page'=>'dashboard',


        ];
        return view('dashboard')->with($variables);
    }
    public function school_secretary()
    {
        $variables=[
            'menu'=>'dashboard',
            'title_page'=>'dashboard',


        ];
        return view('dashboard')->with($variables);
    }
    public function about_us()
    {
        $variables=[
            'menu'=>'dashboard',
            'title_page'=>'dashboard',


        ];
        return view('dashboard')->with($variables);
    }
    public function school_services()
    {
        $variables=[
            'menu'=>'dashboard',
            'title_page'=>'dashboard',


        ];
        return view('dashboard')->with($variables);
    }
    public function school_galery()
    {
        $variables=[
            'menu'=>'dashboard',
            'title_page'=>'dashboard',


        ];
        return view('dashboard')->with($variables);
    }
    public function school_institution()
    {
        $variables=[
            'menu'=>'dashboard',
            'title_page'=>'dashboard',


        ];
        return view('dashboard')->with($variables);
    }
}
