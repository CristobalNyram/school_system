<?php

namespace App\Http\Controllers;

use App\Models\Relrolmenu;
use App\Models\Role;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Runtime;

class RoleController extends Controller
{
    public function index()
    {
        $roles=Role::all();
        $roles_numbers=Role::all()->count();
        $variables=[
            'menu'=>'role',
            'title_page'=>'Roles',
            'roles'=>$roles,
            'roles_numbers'=>$roles_numbers,


        ];
         return view('role.index')->with($variables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $variables=[
            'menu'=>'role',
            'title_page'=>'Roles',


        ];
        return view('role.create')->with($variables);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validaciones = [
            'name' => 'required|string',
            'description' => 'required|string',
            'level'=>'required|min:1|max:50|numeric',
        ];
        $this->validate(request(),$validaciones);

        $role= new Role();

        if ($role->new_registration($request) === true) {


            return back()->with('success','Se ha registrado el rol exitosamente...');

        }
        else
        {
            return  back()->withErrors('No se ha registrado el rol...');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function show(Logbook $logbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function edit(Logbook $logbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logbook $logbook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $logbook)
    {
        //
    }


    //when we indicate the object this object has a funtion for default and this is findOrFail
    public function assign($role_id)
    {

        $current_role_name=  Role::findOrFail($role_id);
        $menus_and_roles=Relrolmenu::all()->where('role_id',$role_id);

        // return $menus_and_roles;
        // die();
        $variables=[
            'menu'=>'role',
            'title_page'=>'Roles',
            'current_role_name'=>$current_role_name,
            'menus'=>$menus_and_roles,


        ];


        return view('role.assign_permissions')->with($variables);
    }
}
