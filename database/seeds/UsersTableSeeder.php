<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
	        [
	            'name' => 'Admin',
	            'email' => 'admin@gmail.com',
	            'password' => bcrypt('secret'),
	            'api_token' => Str::random(60),
	        ],
	    	[
	            'name' => 'User',
	            'email' => 'testuser@gmail.com',
	            'password' => bcrypt('secret'),
	            'api_token' => Str::random(60),
	        ]
    	]);
    }
}
