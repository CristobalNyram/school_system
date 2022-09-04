<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Logbook;

class SpeakerController extends Controller
{
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

        Logbook::activity_done($description='Accedió a la vista de conferencista.',$table_id=0,$menu_id=4,$user_id=Auth::id(),$kind_acction=1);
      
      
        $users_active=User::all()->where('status','=','2')->where('role_id','=','6');
        $users_active_number=User::all()->where('status','=','2')->where('role_id','=','6')->count();
      

       
       
        $variables=[
            'menu'=>'users_all',
            'title_page'=>'Conferencistas',
            'users_actives'=>$users_active,
            'users_active_number'=> $users_active_number,

        ];
        return view('speaker.index')->with($variables);
    }

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

        Logbook::activity_done($description='Accedió a la vista de Crear conferencista.',$table_id=0,$menu_id=12,$user_id=Auth::id(),$kind_acction=1);
        
        
        
        $rol_available=Role::all()->where('status','=','2');
        $variables=[
            'menu'=>'users_all',
            'title_page'=>'Conferencista',
            'rol_available'=>$rol_available,
        ];

        return view('speaker.create')->with($variables);
    }

    public function store(Request $request)
    {
        $user =new User();
        $user->name = $request->name;
        $user->first_surname = $request->first_surname;
        $user->second_surname = $request->second_surname;
        $user->gender = $request->gender;
        $user->role_id =$request->role_id;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->speaker_cv= $request->speaker_cv;

        if($request -> hasFile ('speaker_cv')){
            $file = $request ->file('speaker_cv');
            $destiantionPath = 'argon/speaker/';
            $filename = time() .'-'. $file->getClientOriginalName();
            $uploadSuccess = $request->file('speaker_cv')->move($destiantionPath, $filename);
            $user->speaker_cv = $destiantionPath . $filename;
           }

 
         if ($user->save()) {
            Logbook::activity_done($description='Creo un nuevo conferencista exitosamente '. $user->title. '.' ,$table_id=0,$menu_id=12,$user_id=Auth::id(),$kind_acction=6);

             return back()->with('success','Se ha registrado el usuario exitosamente...');
 
         }
         else
         {
             return  back()->withErrors('No se ha registrado el usuario...');
 
         }
    }

    public function edit(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->name = $request->name;
        $user->first_surname = $request->first_surname;
        $user->second_surname = $request->second_surname;
        $user->speaker_cv = $request->speaker_cv;
        $user->gender = $request->gender;
        $user->role_id = $request->role_id;
        $user->email = $request->email;

    
        if ($user->save()) {

            Logbook::activity_done($description='Actualizo la informacion del conferencista correctamente' . $user->title . '',$table_id=0,$menu_id=10,$user_id=Auth::id(),$kind_acction=3);
            
            return back()->with('success','Se ha actualizado el curso exitosamente...');

        }
        else
        {
            return  back()->withErrors('No se ha actualizado el curso...');

        }
    }

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

        Logbook::activity_done($description='Accedió a la vista  de Actualizar conferencista.',$table_id=0,$menu_id=10,$user_id=Auth::id(),$kind_acction=1);
       
       
       
       
        $current_user=User::findOrFail($user_id);
        $rol_available=Role::all()->where('status','=','2');

        $variables=[
            'menu'=>'users_all',
            'title_page'=>'Conferencista',
            'rol_available'=>$rol_available,
            'current_user'=>$current_user,



        ];

        return view('speaker.update')->with($variables);
    }

    public function delete($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->status=-2;

        if($user->save()){
            Logbook::activity_done($description='Borro a un conferencista exitosamente.',$table_id=0,$menu_id=4,$user_id=Auth::id(),$kind_acction=1);

            return back()->with('success','Se ha eliminado el curso exitosamente...');
        } else {
            return back()->with('success','No se ha eliminado el curso exitosamente...');
        }
    }
}
