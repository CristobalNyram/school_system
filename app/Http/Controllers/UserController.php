<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index');
    }
    public function index_all()
    {
        $variables=[
            'menu'=>'users_all',
            'title_page'=>'Usuarios',


        ];
        return view('users.users.index')->with($variables);
    }
    public function create()
    {
        $rol_available=Role::all()->where('status','=','2');
        $variables=[
            'menu'=>'users_all',
            'title_page'=>'Usuarios',
            'rol_available'=>$rol_available,


        ];

        return view('users.users.create')->with($variables);
    }

    public function store(UserRequest $request)
    {

       $user =new User();
       $user->name = $request->name;
       $user->first_surname = $request->first_surname;
       $user->second_surname = $request->second_surname;
       $user->gender = $request->gender;
       $user->role_id = $request->role_id;
       $user->email = $request->email;
       $user->password = Hash::make($request->password) ;

        if ($user->save()) {
            return back()->with('success','Se ha registrado el usuario exitosamente...');

        }
        else
        {
            return  back()->withErrors('No se ha registrado el usuario...');

        }


    }
}















