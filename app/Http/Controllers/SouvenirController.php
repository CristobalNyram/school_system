<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Souvenir;

class SouvenirController extends Controller
{
      public function index(){
        
        $souvenirs_active=Souvenir::all()->where('status','=','2');
        $souvenirs_active_number=Souvenir::all()->where('status','=','2')->count();



        $variables=[
            'menu'=>'users_all',
            'title_page'=>'Souvenirs',
            'souvenirs_actives'=>$souvenirs_active,
            'souvenirs_active_number'=> $souvenirs_active_number,



        ];
        return view('souvenirs.index')->with($variables);

      }
}
