<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelpaymentpackagesstudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relpaymentpackagesstudents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_student_id');
            $table->unsignedBigInteger('package_id');
            $table->unsignedBigInteger('user_approved_id');
            $table->unsignedBigInteger('user_canceled_id');
            $table->string('comment')->nullable();
            $table->string('status',2);
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
        Schema::dropIfExists('relpaymentpackagesstudents');
    }
}
