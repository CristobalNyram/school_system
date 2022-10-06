<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Talk;
use App\Models\Sponsor;
use App\Models\Souvenir;
use App\Models\User;

class HomeWebController extends Controller
{
    public function index()
    {
        $sponsors2=Sponsor::all()->where('status','=','2')->where('id', '=', '1');

        $variables=[
            'sponsors2'=>$sponsors2,
        ];
        return view('home_page.index')->with($variables);
    }


    public function sponsor()
    {
        $sponsors1=Sponsor::all()->where('status','=','2')->where('id', '=', '1');
        $sponsors2=Sponsor::all()->where('status','=','2')->where('id', '=', '2');
        $sponsors3=Sponsor::all()->where('status','=','2')->where('id', '=', '3');
        $sponsors4=Sponsor::all()->where('status','=','2')->where('id', '=', '4');
        $sponsors5=Sponsor::all()->where('status','=','2')->where('id', '=', '5');

        $variables=[
            'sponsors1'=>$sponsors1,
            'sponsors2'=>$sponsors2,
            'sponsors3'=>$sponsors3,
            'sponsors4'=>$sponsors4,
            'sponsors5'=>$sponsors5,
        ];
        return view('home_page.sponsor')->with($variables);
    }

    public function course()
    {
        $courses1=Course::all()->where('status','=','2')->where('id', '=', '1');
        $courses2=Course::all()->where('status','=','2')->where('id', '=', '2');
        $courses3=Course::all()->where('status','=','2')->where('id', '=', '3');
        $courses4=Course::all()->where('status','=','2')->where('id', '=', '4');
        $courses5=Course::all()->where('status','=','2')->where('id', '=', '5');
        $courses6=Course::all()->where('status','=','2')->where('id', '=', '6');
        $courses7=Course::all()->where('status','=','2')->where('id', '=', '7');
        $courses8=Course::all()->where('status','=','2')->where('id', '=', '8');
        $courses9=Course::all()->where('status','=','2')->where('id', '=', '9');
        $courses10=Course::all()->where('status','=','2')->where('id', '=', '10');
        $courses_active_number=Course::all()->where('status','=','2')->count();
       

        $variables=[
            'courses1'=>$courses1,
            'courses2'=>$courses2,
            'courses3'=>$courses3,
            'courses4'=>$courses4,
            'courses5'=>$courses5,
            'courses6'=>$courses6,
            'courses7'=>$courses7,
            'courses8'=>$courses8,
            'courses9'=>$courses9,
            'courses10'=>$courses10,
            'courses_active_number'=> $courses_active_number,

        ];
        return view('home_page.course')->with($variables);
    }

    public function conference()
    {
        $conference_active=Talk::all()->where('status','=','2');

        $variables=[
            'conference_active'=>$conference_active,
        ];
        return view('home_page.conference')->with($variables);
    }

    public function souvenir()
    {
        $souvenir1=Souvenir::all()->where('status','=','2')->where('id','=','1');
        $souvenir2=Souvenir::all()->where('status','=','2')->where('id','=','2');
        $souvenir3=Souvenir::all()->where('status','=','2')->where('id','=','3');
        $variables=[
            'souvenir1'=>$souvenir1,
            'souvenir2'=>$souvenir2,
            'souvenir3'=>$souvenir3,
        ];
        return view('home_page.souvenir')->with($variables);
    }

    public function login()
    {
       
        return view('home_page.login');
    }
}
