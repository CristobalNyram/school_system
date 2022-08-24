<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelrolmenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relrolmenu', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_id');//referens in what mnodule is
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('status')->default(2);

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
        Schema::dropIfExists('relrolmenu');
    }
}
