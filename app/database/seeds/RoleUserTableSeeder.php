<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RoleUserTableSeeder extends Seeder {

	public function run()
	{
        RoleUser::truncate();
		//$faker = Faker::create();

		//foreach(range(1, 10) as $index)
		//{
			RoleUser::create([
                "role_id" => "1",
                "user_id" => "1",
			]);
			RoleUser::create([
                "role_id" => "2",
                "user_id" => "1",
			]);
			RoleUser::create([
                "role_id" => "1",
                "user_id" => "2",
			]);
		//}
	}

}
