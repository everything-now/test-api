<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('products')->insert([
			[
				'name' => 'Melon - Cantaloupe',
				'price' => 1773.79,
				'creator_id' => 2,
				'created_at' => '2018-11-19 06:00:23'
			],
			[
				'name' => 'Soup - Campbells Broccoli',
				'price' => 215.64,
				'creator_id' => 1,
				'created_at' => '2018-05-22 01:30:11'
			],
			[
				'name' => 'Wine - Sauvignon Blanc Oyster',
				'price' => 46.78,
				'creator_id' => 1,
				'created_at' => '2018-05-18 21:52:14'
			],
			[
				'name' => 'Apricots - Halves',
				'price' => 1907.58,
				'creator_id' => 1,
				'created_at' => '2019-03-25 06:55:54'
			],
			[
				'name' => 'Chutney Sauce',
				'price' => 1084.24,
				'creator_id' => 2,
				'created_at' => '2018-12-06 10:15:37'
			],
			[
				'name' => 'Bread - Bistro Sour',
				'price' => 989.66,
				'creator_id' => 1,
				'created_at' => '2018-11-02 16:30:17'
			],
			[
				'name' => 'Waffle Stix',
				'price' => 1290.15,
				'creator_id' => 1,
				'created_at' => '2019-02-28 13:54:35'
			],
			[
				'name' => 'Everfresh Products',
				'price' => 1173.21,
				'creator_id' => 1,
				'created_at' => '2018-11-11 08:40:35'
			],
			[
				'name' => 'Soup Campbells Mexicali Tortilla',
				'price' => 371.25,
				'creator_id' => 2,
				'created_at' => '2018-11-28 22:42:37'
			],
			[
				'name' => 'Sterno - Chafing Dish Fuel',
				'price' => 458.12,
				'creator_id' => 1,
				'created_at' => '2019-03-31 12:37:03'
			],
			[
				'name' => 'Sambuca - Ramazzotti',
				'price' => 683.0,
				'creator_id' => 2,
				'created_at' => '2018-07-23 16:43:25'
			],
			[
				'name' => 'Octopus - Baby, Cleaned',
				'price' => 671.43,
				'creator_id' => 2,
				'created_at' => '2018-08-12 15:32:19'
			],
			[
				'name' => 'Bread - Olive',
				'price' => 1996.82,
				'creator_id' => 2,
				'created_at' => '2018-09-22 06:54:46'
			],
			[
				'name' => 'Broom - Corn',
				'price' => 1237.63,
				'creator_id' => 1,
				'created_at' => '2019-03-14 17:09:58'
			],
			[
				'name' => 'Juice - Mango',
				'price' => 803.42,
				'creator_id' => 2,
				'created_at' => '2018-10-28 20:13:04'
			],
			[
				'name' => 'Bread - Assorted Rolls',
				'price' => 881.0,
				'creator_id' => 2,
				'created_at' => '2018-07-30 11:52:44'
			],
			[
				'name' => 'Cheese Cheddar Processed',
				'price' => 1727.1,
				'creator_id' => 2,
				'created_at' => '2018-11-27 18:55:38'
			],
			[
				'name' => 'Yoplait - Strawbrasp Peac',
				'price' => 595.59,
				'creator_id' => 2,
				'created_at' => '2018-10-13 20:52:39'
			],
			[
				'name' => 'Chicken Giblets',
				'price' => 454.01,
				'creator_id' => 1,
				'created_at' => '2018-12-31 14:19:16'
			],
			[
				'name' => 'Pumpkin - Seed',
				'price' => 444.27,
				'creator_id' => 1,
				'created_at' => '2018-06-07 21:54:26'
			]
        ]);

        DB::table('category_product')->insert([
			[
				'category_id' =>3,
				'product_id' => 9,
			],
			[
				'category_id' =>8,
				'product_id' => 16
			],
			[
				'category_id' =>1,
				'product_id' => 16
			],
			[
				'category_id' =>3,
				'product_id' => 18
			],
			[
				'category_id' =>1,
				'product_id' => 15
			],
			[
				'category_id' =>6,
				'product_id' => 15
			],
			[
				'category_id' =>7,
				'product_id' => 17
			],
			[
				'category_id' =>8,
				'product_id' => 17
			],
			[
				'category_id' =>6,
				'product_id' => 17
			],
			[
				'category_id' =>2,
				'product_id' => 9,
			],
			[
				'category_id' =>5,
				'product_id' => 1,
			],
			[
				'category_id' =>8,
				'product_id' => 14
			],
			[
				'category_id' =>1,
				'product_id' => 9,
			],
			[
				'category_id' =>1,
				'product_id' => 7,
			],
			[
				'category_id' =>8,
				'product_id' => 20
			],
			[
				'category_id' =>8,
				'product_id' => 8,
			],
			[
				'category_id' =>7,
				'product_id' => 14
			],
			[
				'category_id' =>5,
				'product_id' => 17
			],
			[
				'category_id' =>7,
				'product_id' => 19
			],
			[
				'category_id' =>5,
				'product_id' => 15
			],
			[
				'category_id' =>4,
				'product_id' => 4,
			],
			[
				'category_id' =>6,
				'product_id' => 11
			],
			[
				'category_id' =>8,
				'product_id' => 18
			],
			[
				'category_id' =>5,
				'product_id' => 3,
			],
			[
				'category_id' =>2,
				'product_id' => 3,
			],
			[
				'category_id' =>2,
				'product_id' => 1,
			],
			[
				'category_id' =>6,
				'product_id' => 1,
			],
			[
				'category_id' =>3,
				'product_id' => 7,
			],
			[
				'category_id' =>7,
				'product_id' => 5,
			],
			[
				'category_id' =>4,
				'product_id' => 17
			],
        ]);
    }
}
