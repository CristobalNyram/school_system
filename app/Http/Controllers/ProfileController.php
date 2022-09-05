<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $variables=[
            'menu'=>'',
            'title_page'=>'Perfil',


        ];
        return view('profile.edit')->with($variables);
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        $current_user=User::findOrFail(Auth::id());
        $current_user->name=$request->name;
        $current_user->first_surname=$request->name;
        $current_user->second_surname=$request->second_surname;
        $current_user->address=$request->address;
        $current_user->updated_at=now();
        if($current_user->save())
        {
            return back()->withStatus(__('Perfil actualizadó correctamente.'));

        }

    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        if (auth()->user()->id == 1) {
            return back()->withErrors(['not_allow_password' => __('You are not allowed to change the password for a default user.')]);
        }

        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Contraseña actualizadá correctamente.'));
    }
}
