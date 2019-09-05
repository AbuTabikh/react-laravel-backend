<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemesterModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semester_modules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('module_id')->unsigned();  
            $table->integer('semester_id')->unsigned();  
            $table->timestamps();
            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
            $table->foreign('semester_id')->references('id')->on('semesters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('semester_modules');
    }
}
