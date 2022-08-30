<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
         $courses_active=Course::all()->where('status','=','2');
        $courses_active_number=Course::all()->where('status','=','2')->count();



        $variables=[
            'menu'=>'users_all',
            'title_page'=>'Cursos',
            'courses_actives'=>$courses_active,
            'courses_active_number'=> $courses_active_number,



        ];
        return view('course.index')->with($variables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Role::checkAccesToThisFunctionality(Auth::user()->role_id,4)==null)
        {
            $variables=[
                'menu'=>'',
                'title_page'=>'Acceso denegado',


            ];
            return view('errors.notaccess')->with($variables);

        }
        $rol_available=Role::all()->where('status','=','2');
        $variables=[
            'menu'=>'users_all',
            'title_page'=>'Cursos',
            'rol_available'=>$rol_available,


        ];

        return view('course.create')->with($variables);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course =new Course();
       $course->title = $request->title;
       $course->description = $request->description;
       $course->date = $request->date;
       $course->url_img = $request->url_img;
       $course->speaker_id = $request->speaker_id;
       

        if ($course->save()) {
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
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update($course_id)
    {

        if(Role::checkAccesToThisFunctionality(Auth::user()->role_id,4)==null)
        {
            $variables=[
                'menu'=>'',
                'title_page'=>'Acceso denegado',


            ];
            return view('errors.notaccess')->with($variables);

        }

        $current_course=Course::findOrFail($course_id);
        $rol_available=Role::all()->where('status','=','2');

        $variables=[
            'menu'=>'users_all',
            'title_page'=>'Cursos',
            'rol_available'=>$rol_available,
            'current_course'=>$current_course,



        ];
        return view('course.update')->with($variables);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
