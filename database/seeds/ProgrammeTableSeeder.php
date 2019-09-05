<?php

use Illuminate\Database\Seeder;

class ProgrammeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
        DB::table('programmes')->delete();

		$programmes = array(
			array(
				"name" => "Bachelor of Science (Hons)\r\nin Information Technology",
				"faculty_id" => 1,
			),
			array(
				"name" => "Bachelor of Information Technology\r\nwith Technopreneurship (Hons)",
				"faculty_id" => 1,
			),
			array(
				"name" => "Bachelor of Computer Science\r\n(Hons) Cloud Computing Technology",
				"faculty_id" => 1,
			),
			array(
				"name" => "Bachelor of Science (Hons)\r\nin Electronic Commerce",
				"faculty_id" => 1,
			),
			array(
				"name" => "Bachelor of Science (Hons) in\r\nBusiness Information Technology",
				"faculty_id" => 1,
			),
		);

 
        DB::table('programmes')->insert($programmes);
    }
}
