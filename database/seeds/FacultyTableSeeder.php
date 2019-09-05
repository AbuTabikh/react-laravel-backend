<?php

use Illuminate\Database\Seeder;

class FacultyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
        DB::table('faculties')->delete();

			$faculties = array(
				array(
					"id" => 1,
					"name" => "Faculty of Information & Communication Technology",
					"phone_number" => "-",
					"room_number" => 20
				),
			);


 
        DB::table('faculties')->insert($faculties);
    }
}
