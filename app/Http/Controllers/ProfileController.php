<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use App\Models\Logbook;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $rol= new Role();
        $log= new Logbook();
        if($rol->checkAccesToThisFunctionality(Auth::user()->role_id,37)==null)
        {
            $variables=[
                'menu'=>'',
                'title_page'=>'Acceso denegado',


            ];
            return view('errors.notaccess')->with($variables);

        }
        $log->activity_done($description='Accedió al módulo editar perfil.',$table_id=0,$menu_id=36,$user_id=Auth::id(),$kind_acction=1);


        $variables=[
            'menu'=>'',
            'title_page'=>'Perfil',


        ];
        return view('profile.edit')->with($variables);
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        $rol= new Role();
        $log= new Logbook();
        if($rol->checkAccesToThisFunctionality(Auth::user()->role_id,40)==null)
        {
            $variables=[
                'menu'=>'',
                'title_page'=>'Acceso denegado',


            ];
            return view('errors.notaccess')->with($variables);

        }

        $current_user=User::findOrFail(Auth::id());
        $current_user->name=$request->name;
        $current_user->first_surname=$request->name;
        $current_user->second_surname=$request->second_surname;
        $current_user->address=$request->address;
        $current_user->curp=$request->curp;
        $current_user->blood_type=$request->blood_type;


        $current_user->address=$request->address;
        if($current_user->save())
        {
            $log->activity_done($description='Actualizó su perfil perfil.',$table_id=0,$menu_id=36,$user_id=Auth::id(),$kind_acction=1);

            return back()->withStatus(__('Perfil actualizadó correctamente.'));

        }

    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        $rol= new Role();
        $log= new Logbook();
        if($rol->checkAccesToThisFunctionality(Auth::user()->role_id,39)==null)
        {
            $variables=[
                'menu'=>'',
                'title_page'=>'Acceso denegado',


            ];
            return view('errors.notaccess')->with($variables);

        }

        if (auth()->user()->id == 1) {
            return back()->withErrors(['not_allow_password' => __('You are not allowed to change the password for a default user.')]);
        }

        auth()->user()->update(['password' => Hash::make($request->get('password'))]);
        $log->activity_done($description='Actualizó su perfil contrseña.',$table_id=0,$menu_id=36,$user_id=Auth::id(),$kind_acction=1);

        return back()->withPasswordStatus(__('Contraseña actualizadá correctamente.'));
    }
}
