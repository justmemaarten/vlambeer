<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_categories')->truncate();
        $faker = \Faker\Factory::create();


        for ($i = 0; $i <10; $i++)
        {
            \App\Category::create([
                'category' => $faker->word

            ]);
        }





    }
}
