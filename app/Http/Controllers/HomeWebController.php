<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeWebController extends Controller
{
    public function index()
    {
       
        return view('home_page.index');
    }


    public function sponsor()
    {
       
        return view('home_page.sponsor');
    }

    public function course()
    {
       
        return view('home_page.course');
    }

    public function conference()
    {
       
        return view('home_page.conference');
    }

    public function souvenir()
    {
       
        return view('home_page.souvenir');
    }

    public function login()
    {
       
        return view('home_page.login');
    }
}
