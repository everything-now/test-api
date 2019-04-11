<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
			[
				'name' => 'Books',
				'creator_id' => 1,
				'created_at' => '2018-07-08 10:38:38'
			],
			[
				'name' => 'Outdoors',
				'creator_id' => 2,
				'created_at' => '2018-12-27 13:32:16'
			],
			[
				'name' => 'Beauty',
				'creator_id' => 1,
				'created_at' => '2019-03-21 01:49:47'
			],
			[
				'name' => 'Movies',
				'creator_id' => 1,
				'created_at' => '2019-01-03 21:14:58'
			],
			[
				'name' => 'Games',
				'creator_id' => 2,
				'created_at' => '2018-04-18 16:53:36'
			],
			[
				'name' => 'Clothing',
				'creator_id' => 2,
				'created_at' => '2018-08-30 19:47:37'
			],
			[
				'name' => 'Grocery',
				'creator_id' => 2,
				'created_at' => '2019-02-10 22:30:12'
			],
			[
				'name' => 'Music',
				'creator_id' => 2,
				'created_at' => '2018-06-04 03:51:21'
			],
			[
				'name' => 'Shoes',
				'creator_id' => 1,
				'created_at' => '2018-12-17 07:14:14'
			],
        ]);
    }
}
