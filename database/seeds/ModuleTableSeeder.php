<?php

use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
        DB::table('modules')->delete();
        DB::table('semester_modules')->delete();
		$modules = array(
			array(
				"identifier" => "CMTS001",
				"name" => "Communication Theory & Study Skills",
				"programme_id" => 1,
				"credit" => 3,
			),
			array(
				"identifier" => "FCS0003",
				"name" => "Fundamentals of Computer Systems",
				"programme_id" => 2,
				"credit" => 3,
			),
			array(
				"identifier" => "CPP0007",
				"name" => "C++ Programming 1",
				"programme_id" => 3,
				"credit" => 3,
			),
			array(
				"identifier" => "DCN0013",
				"name" => "Data Communication & Networking",
				"programme_id" => 4,
				"credit" => 3,
			),
			array(
				"identifier" => "DSAA019",
				"name" => "Data Structure & Algorithm Analysis",
				"programme_id" => 5,
				"credit" => 3,
			),
		);

		// Assign faked data for modules and semesters

		$semester_modules = array(
			array(
				"module_id" => 1,
				"semester_id" => 1,
			),
			array(
				"module_id" => 2,
				"semester_id" => 2,
			),
			array(
				"module_id" => 3,
				"semester_id" => 2,
			),
			array(
				"module_id" => 4,
				"semester_id" => 1,
			),
			array(
				"module_id" => 5,
				"semester_id" => 1,
			),
		);
 
        DB::table('modules')->insert($modules);
        DB::table('semester_modules')->insert($semester_modules);
    }
}
