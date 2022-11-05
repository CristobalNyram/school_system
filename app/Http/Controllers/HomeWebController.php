<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Hash;
use App\Models\Carrer;
use App\Models\Talk;
use App\Models\Sponsor;
use App\Models\Souvenir;
use App\Models\User;

class HomeWebController extends Controller
{
    public function index()
    {
        $sponsors2=Sponsor::all()->where('status','=','2');

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
        ];
        return view('home_page.course')->with($variables);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */

    public function CourseInterface($course_id){

        $current_course=Course::findOrFail($course_id);

        $variables=[
            'current_course'=>$current_course,
        ];

        return view('home_page.course_interface')->with($variables);
    }

    public function conference()
    {

        return view('home_page.conference');
    }

    public function ConferenceInterface()
   {

        return view('home_page.conference_interface');

    }

    public function timeline()
    {

        return view('home_page.timeline');
    }

    public function timeline2()
    {
        
        return view('home_page.timeline2');
    }
    

    public function really()
    {


        return view('home_page.publications');


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

    public function create()
    {
        $carrers_available=Carrer::all()->where('status','=','2');

        $variables=[

            'carrers_available'=>$carrers_available,
        ];

        return view('home_page.formulario_registro')->with($variables);
    }

    public function SpeakerInterface($user_id)
    {

        $current_user = User::findOrFail($user_id);
        $current_user1 = User::findOrFail($user_id+1);
        $current_user2 = User::findOrFail($user_id+2);
        $current_user3 = User::findOrFail($user_id+3);

        $variables = [
            'current_user' => $current_user,
            'current_user1' => $current_user1,
            'current_user2' => $current_user2,
            'current_user3' => $current_user3,
        ];

        return view('home_page.speaker')->with($variables);
    }

    public function createStudent(Request $request) {

        $user =new User();
        $user->name = $request->name;
        $user->first_surname = $request->first_surname;
        $user->second_surname = $request->second_surname;
        $user->gender = $request->gender;
        $user->role_id =$request->role_id;
        $user->career = $request->career;
        $user->quarter = $request->quarter;
        $user->group = $request->group;
        $user->email = $request->email;
        $user->password = Hash::make($request->password) ;
        $user->user_image = $request->user_image;
        if ($request->hasFile('user_image')) {
            $file = $request->file('user_image');
            $destiantionPath = 'argon/img/user/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('user_image')->move($destiantionPath, $filename);
            $user->user_image = $destiantionPath . $filename;
        }

        if ($user->save()) {

            return back()->with('success','Se ha registrado el usuario exitosamente...');
        }
        else
        {
            return  back()->withErrors('No se ha registrado el usuario...');

        }

    }
}
