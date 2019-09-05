<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identifier');
            $table->integer('user_id')->unsigned();  
            $table->integer('programme_id')->unsigned();  
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('programme_id')->references('id')->on('programmes')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
