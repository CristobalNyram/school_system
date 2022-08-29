<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    use HasFactory;

    public function activity_done($user_id,$description,$kind_acction,$table_id,$table_name)
    {

        $log=new Logbook();
        $log->description=$description;
        $log->table_id=$table_id;
        $log->table_name=$table_name;
        $log->user_id=$user_id;
        // $log->kind_acction=$kind_acction;
        $log->save();


    }
}
