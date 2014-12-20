<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
        DB::statement("set foreign_key_checks = 0");
        User::truncate();
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			User::create([
                "username" => $faker->name,
                "email" => $faker->email,
                "age" => rand(20,60),
                "password" => "password"
			]);
		}
			User::create([
                "username" => "carousel",
                "email" => "miroslav.trninic@gmail.com",
                "age" => 40,
                "password" => "password"
			]);
	}

}
