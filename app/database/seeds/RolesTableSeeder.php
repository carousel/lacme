<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RolesTableSeeder extends Seeder {

	public function run()
	{
		//$faker = Faker::create();
        DB::statement("set foreign_key_checks = 0");
        Role::truncate();

		//foreach(range(1, 10) as $index)
		//{
			Role::create([
                "role" => "administrator",
			]);
			Role::create([
                "role" => "moderator",
			]);
		//}
	}

}
