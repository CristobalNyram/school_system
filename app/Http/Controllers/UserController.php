<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
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
}















