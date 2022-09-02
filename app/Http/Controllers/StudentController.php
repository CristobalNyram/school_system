<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Logbook;
use App\Models\Carrer;

class StudentController extends Controller
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

        Logbook::activity_done($description='Accedió a la vista de estudiante.',$table_id=0,$menu_id=4,$user_id=Auth::id(),$kind_acction=1);
        
        
        $users_active=User::all()->where('status','=','2')->where('role_id','=','3');
        $users_active_number=User::all()->where('status','=','2')->where('role_id','=','3')->count();
      

       
       
        $variables=[
            'menu'=>'users_all',
            'title_page'=>'Estudiantes',
            'users_actives'=>$users_active,
            'users_active_number'=> $users_active_number,
         



        ];
        return view('student.index')->with($variables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Role::checkAccesToThisFunctionality(Auth::user()->role_id,12)==null)
        {
            $variables=[
                'menu'=>'',
                'title_page'=>'Acceso denegado',


            ];
            return view('errors.notaccess')->with($variables);

        }

        Logbook::activity_done($description='Accedió a la vista de Crear estudiante.',$table_id=0,$menu_id=12,$user_id=Auth::id(),$kind_acction=1);
        
        
        $rol_available=Role::all()->where('status','=','2');
        $carrers_available=Carrer::all()->where('status','=','2');
        $variables=[
            'menu'=>'users_all',
            'title_page'=>'Usuarios',
            'rol_available'=>$rol_available,
            'carrers_available'=>$carrers_available,


        ];

        return view('student.create')->with($variables);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user =new User();
        $user->name = $request->name;
        $user->first_surname = $request->first_surname;
        $user->second_surname = $request->second_surname;
        $user->gender = $request->gender;
        $user->role_id =$request->role_id;
        $user->email = $request->email;
        $user->password = Hash::make($request->password) ;
 
         if ($user->save()) {

            Logbook::activity_done($description='Creo un nuevo estudiante exitosamente '. $user->title. '.' ,$table_id=0,$menu_id=12,$user_id=Auth::id(),$kind_acction=6);

             return back()->with('success','Se ha registrado el usuario exitosamente...');
 
         }
         else
         {
             return  back()->withErrors('No se ha registrado el usuario...');
 
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->name = $request->name;
        $user->first_surname = $request->first_surname;
        $user->second_surname = $request->second_surname;
        $user->gender = $request->gender;
        $user->role_id = $request->role_id;
        $user->email = $request->email;

        if ($user->save()) {

            Logbook::activity_done($description='Actualizo la informacion del estudiante correctamente' . $user->title . '',$table_id=0,$menu_id=10,$user_id=Auth::id(),$kind_acction=3);
            
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
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update($user_id)
    {
        if(Role::checkAccesToThisFunctionality(Auth::user()->role_id,10)==null)
        {
            $variables=[
                'menu'=>'',
                'title_page'=>'Acceso denegado',


            ];
            return view('errors.notaccess')->with($variables);

        }

        Logbook::activity_done($description='Accedió a la vista  de Actualizar estudiante.',$table_id=0,$menu_id=10,$user_id=Auth::id(),$kind_acction=1);
       
       
       
        $current_user=User::findOrFail($user_id);
        $rol_available=Role::all()->where('status','=','2');

        $variables=[
            'menu'=>'users_all',
            'title_page'=>'Usuarios',
            'rol_available'=>$rol_available,
            'current_user'=>$current_user,



        ];

        return view('student.update')->with($variables);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function delete($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->status=-2;

        if($user->save()){

            Logbook::activity_done($description='Borro a un estudiante exitosamente.',$table_id=0,$menu_id=4,$user_id=Auth::id(),$kind_acction=1);

            return back()->with('success','Se ha eliminado el curso exitosamente...');
        } else {
            return back()->with('success','No se ha eliminado el curso exitosamente...');
        }
    }
}
