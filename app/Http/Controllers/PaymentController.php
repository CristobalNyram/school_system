<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Role;
use App\Models\Logbook;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Relpaymentpackagesstudent;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        $role = New Role();
        $log=new Logbook();

        if ($role->checkAccesToThisFunctionality(Auth::user()->role_id, 29) == null) {
            $variables = [
              'menu' => '',
              'title_page' => 'Acceso denegado',
            ];
            return view('errors.notaccess')->with($variables);
          }

          $log->activity_done($description = 'Accedió al módulo de Pagos.', $table_id = 0, $menu_id = 30, $user_id = Auth::id(), $kind_acction = 1);


        $users_active=User::all()->where('status','=','2');
        $users_active_number=User::all()->where('status','=','2')->count();
        $packages_active=Package::all()->where('status','=','2');
        $users_active_number=User::all()->where('status','=','2')->count();
        $packages_active=Package::all()->where('status','=','2');

        $payments_student=Relpaymentpackagesstudent::all()->where('status','>=','1');



        $variables=[
            'menu' => 'payments',
            'title_page'=>'Pagos',
            'users_actives'=>$users_active,
            'users_active_number'=> $users_active_number,
            'packages_active'=> $packages_active,
            'payments_student'=>$payments_student



        ];
        return view('payments.index')->with($variables);
    }
    public function paymenstRequest(Request $request)
    {
        $answer=[];
        $is_requrired_package=Relpaymentpackagesstudent::all()->where('user_student_id','=',Auth::id())->where('status','=',1)->first();
        if($is_requrired_package){

                $answer['status']=-2;
                $answer['title']='ERROR';
                $answer['message']='Usted ya ha hecho una solicitud pago...';
                return $answer;

        }else{
                $new_required_package=new Relpaymentpackagesstudent();
                $new_required_package->user_student_id=Auth::id();
                $new_required_package->package_id=$request->package_id;
                $new_required_package->status=1;

            if($new_required_package->save()){
                $answer['status']=2;
                $answer['title']='Éxito';
                $answer['message']='Su solicitud de pago se ha procesado correctamente...';
                return $answer;
            }else{
                $answer['status']=-2;
                $answer['title']='ERROR';
                $answer['message']='Se produjó un error al momento de procesar los datos...';
                return $answer;
            }



        }


    }

}
