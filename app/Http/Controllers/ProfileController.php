<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use App\Models\Logbook;
use App\Models\Carrer;
use App\Models\Course;
use Illuminate\Support\Carbon;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $rol= new Role();
        $log= new Logbook();
        if($rol->checkAccesToThisFunctionality(Auth::user()->role_id,37)==null)
        {
            $variables=[
                'menu'=>'',
                'title_page'=>'Acceso denegado',
             
            ];
            return view('errors.notaccess')->with($variables);

        }
        $log->activity_done($description='Accedió al módulo editar perfil.',$table_id=0,$menu_id=36,$user_id=Auth::id(),$kind_acction=1);

        $Foto = auth()->user()->user_image_updated;
        

        $fotoPosterio = $Foto;

        $carrers_available=Carrer::all()->where('status','=','2');
        $course_available=Course::all()->where('status', '=', '2');


        $variables=[
            'menu'=>'',
            'title_page'=>'Perfil',
            'carrers_available' => $carrers_available,
            'course_available' => $course_available,
            'Foto' => $Foto,


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
        $rol= new Role();
        $log= new Logbook();
        if($rol->checkAccesToThisFunctionality(Auth::user()->role_id,40)==null)
        {
            $variables=[
                'menu'=>'',
                'title_page'=>'Acceso denegado',
            ];
            return view('errors.notaccess')->with($variables);
        }


        $current_user=User::findOrFail(Auth::id());

        
        // global variables
        $current_user->name=$request->name;
        $current_user->first_surname=$request->first_surname;
        $current_user->second_surname=$request->second_surname;
        $current_user->email=$request->email;
        $current_user->gender=$request->gender;
        
        $current_user->user_image_updated = Carbon::now()->format('Y-m-d');

          if($request->user_imagen){
            $current_user->user_image_updated = Carbon::now()->format('Y-m-d');
            $foto = Auth()->user()->user_image;
            $fecha = Carbon::now()->format('Y-m-d');

            while($current_user->user_image_updated == $fecha){
                $current_user->user_image = $request->user_image;
            }
        }

        //addDay(3)


        //Speaker
        $current_user->academic_level=$request->academic_level;
        $current_user->description=$request->description;
        $current_user->specialty=$request->specialty;
        $current_user->speaker_cv=$request->speaker_cv;
        $current_user->speaker_cv=$request->speaker_cv;

        //student
        $current_user->career=$request->career;
        $current_user->quarter=$request->quarter;
        $current_user->group=$request->group;


        if ($request->hasFile('user_image')) {
            $file = $request->file('user_image');
            $destiantionPath = 'argon/img/user/speaker/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('user_image')->move($destiantionPath, $filename);
            $current_user->user_image = $destiantionPath . $filename;
          }

    
        if($request -> hasFile ('speaker_cv')){
            $file = $request ->file('speaker_cv');
            $destiantionPath = 'argon/speaker_cv/';
            $filename = time() .'-'. $file->getClientOriginalName();
            $uploadSuccess = $request->file('speaker_cv')->move($destiantionPath, $filename);
            $current_user->speaker_cv = $destiantionPath . $filename;
         }





        $current_user->address=$request->address;
        if($current_user->save())
        {
            $log->activity_done($description='Actualizó su perfil perfil.',$table_id=0,$menu_id=36,$user_id=Auth::id(),$kind_acction=1);

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
        $rol= new Role();
        $log= new Logbook();
        if($rol->checkAccesToThisFunctionality(Auth::user()->role_id,39)==null)
        {
            $variables=[
                'menu'=>'',
                'title_page'=>'Acceso denegado',
            ];
            return view('errors.notaccess')->with($variables);
        }

        if (auth()->user()->id == 1) {
            return back()->withErrors(['not_allow_password' => __('You are not allowed to change the password for a default user.')]);
        }

        auth()->user()->update(['password' => Hash::make($request->get('password'))]);
        $log->activity_done($description='Actualizó su perfil contrseña.',$table_id=0,$menu_id=36,$user_id=Auth::id(),$kind_acction=1);

        return back()->withPasswordStatus(__('Contraseña actualizadá correctamente.'));
    }
}
