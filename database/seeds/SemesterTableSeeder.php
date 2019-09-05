<?php

use Illuminate\Database\Seeder;

class SemesterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
        DB::table('semesters')->delete();

		$semesters = array(
			array(
				"name" => "SEM 1",
				"start_date" => "2019-02-01",
				"end_date" => "2019-06-05",
				"year" => "2019",
			),
			array(
				"name" => "SEM 2",
				"start_date" => "2019-07-01",
				"end_date" => "2019-12-12",
				"year" => "2019",
			),
		);

 
        DB::table('semesters')->insert($semesters);
    }
}
