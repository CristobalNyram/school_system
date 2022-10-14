<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relpaymentpackagesstudent extends Model
{
    use HasFactory;
    public function student()
    {
        return $this->belongsTo(User::class,'user_student_id');
    }
    public function package()
    {
        return $this->belongsTo(Package::class,'package_id');
    }


}
