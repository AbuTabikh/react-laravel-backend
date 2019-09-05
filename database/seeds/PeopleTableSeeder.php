<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {

        DB::table('people')->delete();

		$people = array(
		array(
			"id" => 1,
			"user_id" => 1,
			"first_name" => "Admin",
			"middle_name" => NULL,
			"last_name" => NULL,
			"date_of_birth" => "1980-01-01",
			"gender_id" => 1,
			"nationality_id" => 1,
			"marital_status_id" => 1,
			"photo_id" => NULL,
			"race_id" => 1,
			"address" => "Cyberjaya",
			"phone" => NULL,
			"created_at" => NULL,
			"updated_at" => NULL,
			"deleted_at" => NULL,
		),
		array(
			"id" => 2,
			"user_id" => 2,
			"first_name" => "Mohammed Abutabikh",
			"middle_name" => NULL,
			"last_name" => NULL,
			"date_of_birth" => "1980-01-01",
			"gender_id" => 1,
			"nationality_id" => 1,
			"marital_status_id" => 1,
			"photo_id" => NULL,
			"race_id" => 3,
			"address" => "Putrajaya",
			"phone" => NULL,
			"created_at" => NULL,
			"updated_at" => NULL,
			"deleted_at" => NULL,
		),
	);


 
        DB::table('people')->insert($people);
    }
}
