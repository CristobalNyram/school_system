<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus=Menu::all();
        $menus_numbers=Menu::all()->count();
        $variables=[
            'menu'=>'menus',
            'title_page'=>'Menus',
            'menus'=>$menus,
            'menus_numbers'=>$menus_numbers,


        ];
        return view('menu.index')->with($variables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $variables=[
            'menu'=>'menus',
            'title_page'=>'Menús',
        ];
        return view('menu.create')->with($variables);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $variables=[
                'menu'=>'menus',
                'title_page'=>'Menus',


         ];

         $validaciones = [
            'title' => 'required|string',
            'description' => 'required',
            'menu_parent' => 'required|min:0|max:50|numeric',
            'order'=>'required|min:1|max:50|numeric',
        ];

         $mensajes = [
            'title.required' => 'No puedes dejar vacío, necesitas agregar un nombre al menú.',
            'title.string' => 'No se permitén caracteres extaños al nombre del menú.',
            'menu_parent.required' => 'Ingresa un número en el menu padre.',
            'order.required' => 'Ingresa un número en orden del menu.',
            'menu_parent.numeric' => 'Ingresa un número en el menu padre.',
            'order.numeric' => 'Ingresa un número en orden del menu.'

        ];

         $this->validate(request(),$validaciones,$mensajes);

         $menu= new Menu();


        if ($menu->new_registration($request) === true) {


            return back()->with('success','Se ha registrado el menú exitosamente...');

        }
        else
        {
            return  back()->withErrors('No se ha registrado el menú...');

        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
