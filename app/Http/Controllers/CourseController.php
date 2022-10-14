<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Logbook;
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
        $role = New Role();
        $log = new Logbook();

        if ($role->checkAccesToThisFunctionality(Auth::user()->role_id, 10) == null) {
            $variables = [
                'menu' => '',
                'title_page' => 'Acceso denegado',
            ];
            return view('errors.notaccess')->with($variables);
        }

        $log->activity_done($description = 'Accedió al módulo de Cursos.', $table_id = 0, $menu_id = 10, $user_id = Auth::id(), $kind_acction = 1);


        $courses_active=Course::all()->where('status','=','2');
        $courses_active_number=Course::all()->where('status','=','2')->count();



        $variables=[
            'menu'=>'courses_all',
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
        $role = New Role();
        $log = new Logbook();

        if ($role->checkAccesToThisFunctionality(Auth::user()->role_id, 12) == null) {
            $variables = [
                'menu' => '',
                'title_page' => 'Acceso denegado',
            ];
            return view('errors.notaccess')->with($variables);
        }

        $log->activity_done($description = 'Accedió al módulo de Cursos.', $table_id = 0, $menu_id = 12, $user_id = Auth::id(), $kind_acction = 1);

        $rol_available=Role::all()->where('status','=','2');
        $users_speakers=User::all()->where('status', '=', '2')->where('role_id','=','6');

        $variables=[
            'menu'=>'courses_all',
            'title_page'=>'Cursos',
            'rol_available'=>$rol_available,
            'users_speakers'=>$users_speakers,



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
       $course->maximum_person = $request->maximum_person;
       $course->date = $request->date;
       $course->url_img = $request->url_img;
       $course->speaker_id = $request->speaker_id;

       if($request -> hasFile ('url_img')){
        $file = $request ->file('url_img');
        $destiantionPath = 'argon/img/course/';
        $filename = time() .'-'. $file->getClientOriginalName();
        $uploadSuccess = $request->file('url_img')->move($destiantionPath, $filename);
        $course->url_img = $destiantionPath . $filename;

       }


        if ($course->save()) {

            Logbook::activity_done($description='Agregó el curso '. $course->title. 'exitosamente' ,$table_id=0,$menu_id=12,$user_id=Auth::id(),$kind_acction=6);

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
    public function edit(Request $request)
    {
        $course = Course::findOrFail($request->id);
        $course->title=$request->title;
        $course->description = $request->description;
        $course->date = $request->date;
        $course->url_img = $request->url_img;
        $course->speaker_id = $request->speaker_id;

        if($request -> hasFile ('url_img')){
            $file = $request ->file('url_img');
            $destiantionPath = 'argon/img/course/';
            $filename = time() .'-'. $file->getClientOriginalName();
            $uploadSuccess = $request->file('url_img')->move($destiantionPath, $filename);
            $course->url_img = $destiantionPath . $filename;

        }

        if ($course->save()) {
            Logbook::activity_done($description='Actualizo el curso de' . $course->title . ' correctamente',$table_id=0,$menu_id=10,$user_id=Auth::id(),$kind_acction=3);
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
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update($course_id)
    {

        if(Role::checkAccesToThisFunctionality(Auth::user()->role_id,10)==null)
        {
            $variables=[
                'menu'=>'',
                'title_page'=>'Acceso denegado',


            ];
            return view('errors.notaccess')->with($variables);

        }

        Logbook::activity_done($description='Accedió al módulo para actualizar un curso.',$table_id=0,$menu_id=10,$user_id=Auth::id(),$kind_acction=1);

        $current_course=Course::findOrFail($course_id);
        $rol_available=Role::all()->where('status','=','2');
        $users_speakers=User::all()->where('status', '=', '2');

        $variables=[
            'menu'=>'courses_all',
            'title_page'=>'Cursos',
            'rol_available'=>$rol_available,
            'current_course'=>$current_course,
            'users_speakers'=>$users_speakers,



        ];
        return view('course.update')->with($variables);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function delete($course_id)
    {
        $course = Course::findOrFail($course_id);
        $course->status=-2;

        if($course->save()){
            Logbook::activity_done($description = 'Eliminó el curso ' . $course->title . ' correctamente', $table_id = 0, $menu_id = 10, $user_id = Auth::id(), $kind_acction = 3);
            return back()->with('success','Se ha eliminado el curso exitosamente...')->with('eliminar', 'ok');
        } else {
            return back()->with('success','No se ha eliminado el curso exitosamente...');
        }
    }
}
