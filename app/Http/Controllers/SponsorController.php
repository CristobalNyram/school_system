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
        $sponsors_active = Sponsor::all()->where('status', '=', '2');
    $sponsors_active_number = Sponsor::all()->where('status', '=', '2')->count();

    $variables = [
      'menu' => 'users_all',
      'title_page' => 'Sponsors',
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
        if(Role::checkAccesToThisFunctionality(Auth::user()->role_id,12)==null)
        {
            $variables=[
                'menu'=>'',
                'title_page'=>'Acceso denegado',


            ];
            return view('errors.notaccess')->with($variables);

        }


        $rol_available=Role::all()->where('status','=','2');
        $variables=[
            'menu'=>'users_all',
            'title_page'=>'Cursos',
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
          Logbook::activity_done($description = 'Actualizo el slogan ' . $sponsor->name . '', $table_id = 0, $menu_id = 22, $user_id = Auth::id(), $kind_acction = 3);
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
        if (Role::checkAccesToThisFunctionality(Auth::user()->role_id, 19) == null) {
            $variables = [
              'menu' => '',
              'title_page' => 'Acceso denegado',
            ];
            return view('errors.notaccess')->with($variables);
          }

      
          Logbook::activity_done($description = 'Accedió al módulo de Actualizar Sponsor.', $table_id = 0, $menu_id = 19, $user_id = Auth::id(), $kind_acction = 1);
      
          $current_sponsor = Sponsor::findOrFail($sponsor_id);
      
          $variables = [
            'menu' => 'sponsors_all',
            'title_page' => 'Sponsors',
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
      return back()->with('success', 'Se ha borrado el sponsor exitosamente...');
    }else{
      return back()->with('success', 'No se ha borrado el sponsor exitosamente...');
    }
  }
}
