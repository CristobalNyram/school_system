<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Logbook;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    if (Role::checkAccesToThisFunctionality(Auth::user()->role_id, 29) == null) {
      $variables = [
        'menu' => '',
        'title_page' => 'Acceso denegado',

      ];
      return view('errors.notaccess')->with($variables);
    }

    Logbook::activity_done($description = 'Accedió a la vista de Patrocinadores.', $table_id = 0, $menu_id = 29, $user_id = Auth::id(), $kind_acction = 1);



        $sponsors_active = Sponsor::all()->where('status', '=', '2');
    $sponsors_active_number = Sponsor::all()->where('status', '=', '2')->count();

    $variables = [
      'menu' => 'sponsors_all',
      'title_page' => 'Patrocinadores',
      'sponsors_actives' => $sponsors_active,
      'sponsors_active_number' => $sponsors_active_number,
    ];
    return view('sponsors.index')->with($variables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
    if (Role::checkAccesToThisFunctionality(Auth::user()->role_id, 30) == null) {
      $variables = [
        'menu' => '',
        'title_page' => 'Acceso denegado',


      ];
      return view('errors.notaccess')->with($variables);
    }
    Logbook::activity_done($description = 'Accedió al módulo para  Crear un Patrocinador.', $table_id = 0, $menu_id = 30, $user_id = Auth::id(), $kind_acction = 1);      
  


        $rol_available=Role::all()->where('status','=','2');
        $variables=[
            'menu'=>'sponsors_all',
            'title_page'=>'Patrocinadores',
            'rol_available'=>$rol_available,


        ];

        return view('sponsors.create')->with($variables);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $sponsor =new Sponsor();
      $sponsor->name = $request->name;
      $sponsor->slogan = $request->slogan;
      $sponsor->url_img = $request->url_img;

      if($request -> hasFile ('url_img')){
        $file = $request ->file('url_img');
        $destiantionPath = 'argon/img/sponsor/';
        $filename = time() .'-'. $file->getClientOriginalName();
        $uploadSuccess = $request->file('url_img')->move($destiantionPath, $filename);
        $sponsor->url_img = $destiantionPath . $filename;
      }

        if ($sponsor->save()) {
            Logbook::activity_done($description = 'Creó el patrocinador ' . $sponsor->name . 'correctamente', $table_id = 0, $menu_id = 30, $user_id = Auth::id(), $kind_acction = 6);
            return back()->with('success','Se ha registrado el patrocinador exitosamente...');

        }
        else
        {
            return  back()->withErrors('No se ha registrado...');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function show(Sponsor $sponsor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $sponsor = Sponsor::findOrFail($request->id);
        $sponsor->name = $request->name;
        $sponsor->slogan = $request->slogan;
        $sponsor->url_img = $request->url_img;

        
        
        if($request -> hasFile('url_img')){
          $file = $request ->file('url_img');
          $destiantionPath = 'argon/img/sponsor/';
          $filename = time() .'-'. $file->getClientOriginalName();
          $uploadSuccess = $request->file('url_img')->move($destiantionPath, $filename);
          $sponsor->url_img = $destiantionPath . $filename;
        }

    
        if ($sponsor->save()) {
        Logbook::activity_done($description = 'Actualizó el patrocinador ' . $sponsor->name . ' correctamente', $table_id = 0, $menu_id = 30, $user_id = Auth::id(), $kind_acction = 3);
          return back()->with('success', 'Se ha actualizado el Patrocinador exitosamente...');
        } else {
          return  back()->withErrors('No se ha actualizado el Patrocinador...');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */
    public function update($sponsor_id)
    {
        if (Role::checkAccesToThisFunctionality(Auth::user()->role_id, 29) == null) {
        $variables = [
          'menu' => '',
          'title_page' => 'Acceso denegado',
        ];
        return view('errors.notaccess')->with($variables);
      }
    Logbook::activity_done($description = 'Accedió al módulo de Actualizar Patrocinador.', $table_id = 0, $menu_id = 30, $user_id = Auth::id(), $kind_acction = 1);      
  
          $current_sponsor = Sponsor::findOrFail($sponsor_id);
      
          $variables = [
            'menu' => 'sponsors_all',
            'title_page' => 'Patrocinadores',
            'current_sponsor' => $current_sponsor,
          ];
          return view('sponsors.update')->with($variables);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sponsor  $sponsor
     * @return \Illuminate\Http\Response
     */

    
    public function delete($sponsor_id)
  {
    $sponsor = Sponsor::findOrFail($sponsor_id);
    $sponsor->status=-2;
    if($sponsor->save()){
      Logbook::activity_done($description = 'Eliminó el patrocinador ' . $sponsor->name . 'correctamente', $table_id = 0, $menu_id = 30, $user_id = Auth::id(), $kind_acction = 4);
      return back()->with('success', 'Se ha borrado el sponsor exitosamente...')->with('eliminar', 'ok');
    }else{
      return back()->with('success', 'No se ha borrado el sponsor exitosamente...');
    }
  }
}
