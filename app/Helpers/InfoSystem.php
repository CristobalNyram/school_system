
<?php

use App\Models\Role;


if (! function_exists('get_name_system')) {

    function get_name_system()
    {
        return auth()->user();
    }
}






////Here is for security of the system
if (! function_exists('check_acces_to_this_permission')) {


    function check_acces_to_this_permission($role_id,$menu_id)
    {
      if(Role::checkAccesToThisFunctionality($role_id,$menu_id)==null)
      {
        return false;
      }
      else
      {
        return true;
      }
    }
}
