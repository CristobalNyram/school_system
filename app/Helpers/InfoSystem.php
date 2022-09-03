
<?php

use App\Models\Role;
use App\Models\Configuration;

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

