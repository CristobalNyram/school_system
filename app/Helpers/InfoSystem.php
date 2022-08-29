
<?php

if (! function_exists('get_name_system')) {

    function get_name_system()
    {
        return auth()->user();
    }
}
