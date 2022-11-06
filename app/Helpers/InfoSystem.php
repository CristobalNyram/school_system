
<?php

// use App\Http\Controllers\Relpaymentpackagesstudent;
use App\Models\Role;
use App\Models\Relpaymentpackagesstudent;


use App\Models\Configuration;
use App\Models\Relcoursestudent;
use App\Models\Relpackagessourvenir;
use Illuminate\Support\Facades\Auth;

////Here is for security of the system
if (! function_exists('check_acces_to_this_permission')) {


    function check_acces_to_this_permission($role_id,$menu_id)
    {
        $role = New Role();

      if($role->checkAccesToThisFunctionality($role_id,$menu_id)==null)
      {
        return false;
      }
      else
      {
        return true;
      }
    }
}





if (! function_exists('config_name_system')) {

          //el id corresponde a la tabla configurarion en el 1d 2
            function config_name_system()
            {
            $name_system =Configuration::findOrFail(2);
            if($name_system==null)
            {
                return 'Sin nombre';
            }
            else
            {
                return $name_system->content;
            }
            }
}
if (! function_exists('config_icon_logo_system')) {

    //el id corresponde a la tabla configurarion en el 1d 2
      function config_icon_logo_system()
      {
        $logo_icon =Configuration::findOrFail(1);
        if($logo_icon==null)
        {
            return 'Sin nombre';
        }
        else
        {
            return $logo_icon->content;
        }
      }
}
if (! function_exists('config_author_system')) {

    //el id corresponde a la tabla configurarion en el 1d 2
      function config_author_system()
      {
        $author_system =Configuration::findOrFail(4);
        if($author_system==null)
        {
            return 'Sin nombre';
        }
        else
        {
            return $author_system->content;
        }
      }
}

// helpers for check payments start
if (! function_exists('check_if_paid_package')) {

        //check if the user has bought his/her ticket
      function check_if_paid_package()
      {
            $check_if_paid_package = Relpaymentpackagesstudent::where('user_student_id','=',Auth::id())->where('status','=',2)->first();

      }
}
if (! function_exists('check_if_requested_package')) {

        //check if the user has requested the package
        function check_if_requested_package()
        {
                $check_if_requested_package = Relpaymentpackagesstudent::where('user_student_id','=',Auth::id())->where('status','=',1)->first();
                if( $check_if_requested_package)
                {
                    return true;
                }else
                {
                    return false;
                }

        }
}
if (! function_exists('check_if_enrolled_in_course')) {

    //check if the user has enrrolled in any  course
    function check_if_enrolled_in_course()
    {
            $check_if_enrolled_in_course = Relcoursestudent::where('user_student_id','=',Auth::id())->where('status','=',2)->first();
            if( $check_if_enrolled_in_course)
            {
                return true;
            }else
            {
                return false;
            }
    }
}
// helpers for check payments end



