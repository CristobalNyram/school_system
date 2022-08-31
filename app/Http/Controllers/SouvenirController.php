<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Souvenir;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class SouvenirController extends Controller
{
  public function index()
  {

    $souvenirs_active = Souvenir::all()->where('status', '=', '2');
    $souvenirs_active_number = Souvenir::all()->where('status', '=', '2')->count();

    $variables = [
      'menu' => 'users_all',
      'title_page' => 'Souvenirs',
      'souvenirs_actives' => $souvenirs_active,
      'souvenirs_active_number' => $souvenirs_active_number,
    ];
    return view('souvenirs.index')->with($variables);
  }

  public function edit(Request $request)
  {
    $souvenir = Souvenir::findOrFail($request->id);
    $souvenir->name= $request->name;
    $souvenir->description = $request->description;
    $souvenir->price = $request->price;
    $souvenir->url_img = $request->url_img;

    if ($souvenir->save()) {
      return back()->with('success', 'Se ha actualizado el curso exitosamente...');
    } else {
      return  back()->withErrors('No se ha actualizado el curso...');
    }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Souvenir  $souvenir
   * @return \Illuminate\Http\Response
   */

  public function update($souvenir_id)
  {
    if (Role::checkAccesToThisFunctionality(Auth::user()->role_id, 4) == null) {
      $variables = [
        'menu' => '',
        'title_page' => 'Acceso denegado',


      ];
      return view('errors.notaccess')->with($variables);
    }

    $current_souvenir = Souvenir::findOrFail($souvenir_id);

    $variables = [
      'menu' => 'users_all',
      'title_page' => 'Souvenirs',
      'current_souvenir' => $current_souvenir,

    ];
    return view('souvenirs.update')->with($variables);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Souvenir  $souvenir
   * @return \Illuminate\Http\Response
   */
}
