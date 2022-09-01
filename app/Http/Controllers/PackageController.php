<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
      if (Role::checkAccesToThisFunctionality(Auth::user()->role_id, 19) == null) {
        $variables = [ 
  
          
          'menu' => '',
          'title_page' => 'Acceso denegado',
  
  
        ];
        return view('errors.notaccess')->with($variables);
      }
      
  
      $packages_active = Package::all()->where('status', '=', '2');
      $packages_active_number = Package::all()->where('status', '=', '2')->count();
  
      $variables = [
        'menu' => 'users_all',
        'title_page' => 'Paquetes',
        'packages_actives' => $packages_active,
        'packages_active_number' => $packages_active_number,
      ];
      return view('packages.index')->with($variables);
    }
  
    public function edit(Request $request)
    {
      $packages = Packages::findOrFail($request->id);
      $packages->name = $request->name;
      $packages->description = $request->description;
      $packages->price = $request->price;
      $packages->souvenir_id = $request->souvenir_id;
  
      if ($souvenir->save()) {
       
        return back()->with('success', 'Se ha actualizado el paquete exitosamente...');
      } else {
        return  back()->withErrors('No se ha actualizado el paquete...');
      }
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
  
    public function update($package_id)
    {
      if (Role::checkAccesToThisFunctionality(Auth::user()->role_id, 19) == null) {
        $variables = [
          'menu' => '',
          'title_page' => 'Acceso denegado',
        ];
        return view('errors.notaccess')->with($variables);
      }
  
      
  
      $current_package = Package::findOrFail($package_id);
  
      $variables = [
        'menu' => 'packages_all',
        'title_page' => 'Packages',
        'current_package' => $current_package,
      ];
      return view('packages.update')->with($variables);
    }
  
    // Show the form for creating a new resource.
  
    public function create()
    {
      if (Role::checkAccesToThisFunctionality(Auth::user()->role_id, 22) == null) {
        $variables = [
          'menu' => '',
          'title_page' => 'Acceso denegado',
  
  
        ];
        return view('errors.notaccess')->with($variables);
      }
  
      
  
  
      $package_available = Package::all()->where('status', '=', '2');
      $variables = [
        'menu' => 'users_all',
        'title_page' => 'Packages',
        'package_available' => $package_available,
  
  
      ];
  
      return view('packages.create')->with($variables);
    }
  
  
  
    // Store a newly created resource in storage.
  
    public function store(Request $request)
    {
      $package = new Package();
      $package->name = $request->name;
      $package->description = $request->description;
      $package->price = $request->price;
      $package->souvenir_id = $request->souvenir_id;
  
  
      if ($package->save()) {
       
        return back()->with('success', 'Se ha registrado el paquete exitosamente...');
      } else {
        return  back()->withErrors('No se ha registrado el paquete...');
      }
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function delete($package_id)
    {
        $package = Souvenir::findOrFail($package_id);
        $package->status=-2;
      if($package->save()){
        return back()->with('success', 'Se ha borrado el paquete exitosamente...');
      }else{
        return back()->with('success', 'No se ha borrado el paquete exitosamente...');
      }
    }
}
