<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {

        DB::table('students')->delete();
	 	$students = array(
			array(
				"id" => 1,
				"identifier" => "110021128",
				"user_id" => 2,
				"programme_id" => 1,
				"created_at" => NULL,
				"updated_at" => NULL,
			),
		);


 
        DB::table('students')->insert($students);
    }
}
