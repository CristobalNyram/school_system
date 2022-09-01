<?php

namespace App\Http\Controllers;

use App\Models\Talk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;
use App\Models\User;

class TalkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Role::checkAccesToThisFunctionality(Auth::user()->role_id,10)==null)
        {
            $variables=[
                'menu'=>'',
                'title_page'=>'Acceso denegado',


            ];
            return view('errors.notaccess')->with($variables);

        }
       
       
        $talks_active=Talk::all()->where('status','=','2');
        $talks_active_number=Talk::all()->where('status','=','2')->count();
        
       
       
        $variables=[
            'menu'=>'users_all',
            'title_page'=>'Conferencias',
            'talks_actives'=>$talks_active,
            'talks_active_number'=> $talks_active_number,



        ];
       
        return view('talk.index')->with($variables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rol_available=Role::all()->where('status','=','2');
        $users_speakers=User::all()->where('status', '=', '2');
        $variables=[
            'menu'=>'users_all',
            'title_page'=>'Conferencias',
            'rol_available'=>$rol_available,
            'users_speakers'=>$users_speakers,


        ];
      
        return view('talk.create')->with($variables);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $talk =new Talk();
       $talk->name = $request->name;
       $talk->description = $request->description;
       $talk->date = $request->date;
       $talk->time = $request->time;
       $talk->url_img = $request->url_img;
       $talk->speaker_id = $request->speaker_id;

       if ($talk->save()) {

        return back()->with('success','Se ha registrado el curso exitosamente...');

    }
    else
    {
        return  back()->withErrors('No se ha registrado el usuario...');

    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function show(Talk $talk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $talk = Talk::findOrFail($request->id);
         $talk->name=$request->name;
         $talk->description = $request->description;
         $talk->date = $request->date;
         $talk->time = $request->time;
         $talk->url_img = $request->url_img;
         $talk->speaker_id = $request->speaker_id;

         if ($talk->save()) {
            
            return back()->with('success','Se ha actualizado el curso exitosamente...');

        }
        else
        {
            return  back()->withErrors('No se ha actualizado el curso...');

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function update($talk_id)
    {
        if(Role::checkAccesToThisFunctionality(Auth::user()->role_id,10)==null)
        {
            $variables=[
                'menu'=>'',
                'title_page'=>'Acceso denegado',


            ];
            return view('errors.notaccess')->with($variables);

        }

     

        $current_talk=Talk::findOrFail($talk_id);
        $rol_available=Role::all()->where('status','=','2');
        $users_speakers=User::all()->where('status', '=', '2');

        $variables=[
            'menu'=>'users_all',
            'title_page'=>'Conferencias',
            'rol_available'=>$rol_available,
            'current_talk'=>$current_talk,
            'users_speakers'=>$users_speakers,



        ];
        return view('talk.update')->with($variables);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function delete($talk_id)
    {
        $course = Talk::findOrFail($talk_id);
        $course->status=-2;

        if($course->save()){
            return back()->with('success','Se ha eliminado el curso exitosamente...');
        } else {
            return back()->with('success','No se ha eliminado el curso exitosamente...');
        }
    }
}
