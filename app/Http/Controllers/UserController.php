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

    }
}















