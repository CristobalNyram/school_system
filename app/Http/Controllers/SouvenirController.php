<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Souvenir;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SouvenirController extends Controller
{
      public function index(){
        
        $souvenirs_active=Souvenir::all()->where('status','=','2');
        $souvenirs_active_number=Souvenir::all()->where('status','=','2')->count();



        $variables=[
            'menu'=>'souvenirs_all',
            'title_page'=>'Souvenirs',
            'souvenirs_actives'=>$souvenirs_active,
            'souvenirs_active_number'=> $souvenirs_active_number,



        ];
        return view('souvenirs.index')->with($variables);

      }

      // Show the form for creating a new resource.

      public function create()
    {
        /*if(Role::checkAccesToThisFunctionality(Auth::user()->role_id,4)==null)
        {
            $variables=[
                'menu'=>'',
                'title_page'=>'Acceso denegado',


            ];
            return view('errors.notaccess')->with($variables);

        } */

        $souvenir_available=Souvenir::all()->where('status','=','2');
        $variables=[
            'menu'=>'users_all',
            'title_page'=>'Souvenirs',
            'souvenir_available'=>$souvenir_available,


        ];

        return view('souvenirs.create')->with($variables);
    }



    // Store a newly created resource in storage.

    public function store(Request $request)
    {
        $souvenir = new Souvenir();
        $souvenir->name = $request->name;
        $souvenir->price = $request->price;
        $souvenir->description = $request->description;
        $souvenir->url_img = $request->url_img;
       

        if ($souvenir->save()) {
            return back()->with('success','Se ha registrado el souvenir exitosamente...');

        }
        else
        {
            return  back()->withErrors('No se ha registrado el souvenir...');

        }

    }

}
