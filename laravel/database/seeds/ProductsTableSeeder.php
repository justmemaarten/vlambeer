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
        DB::table('tbl_products')->truncate();
        $faker = \Faker\Factory::create();

        DB::setFetchMode(PDO::FETCH_ASSOC);
        $ids = DB::table('tbl_categories')->get();
        DB::setFetchMode(PDO::FETCH_CLASS);

        for ($i = 0; $i <10; $i++)
        {
            \App\Product::create([
                'name' => $faker->word,
                'price' => mt_rand(1, 200),
                'img' => $faker->imageUrl($width = 500, $height = 500, 'abstract'),
                'description' => $faker->paragraph($nbSentences = 3),
                'stock' => mt_rand(1, 150),
                'category_id' => $ids[mt_rand(0, count($ids)-1)]['category_id']

            ]);
        }
    }
}
