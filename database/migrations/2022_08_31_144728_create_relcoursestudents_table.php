<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelcoursestudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relcoursestudents', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('course_id');
            // $table->unsignedBigInteger('user_student_id');
            // $table->unsignedBigInteger('user_approved_id');
            // $table->unsignedBigInteger('user_canceled_id');
            // $table->string('status')->default(2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relcoursestudent');
    }
}
