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


            \App\Category::create([
                'category' => 'Clothes'

            ]);
            \App\Category::create([
                'category' => 'Miscellaneous'

            ]);
            \App\Category::create([
                'category' => 'Music'

            ]);






    }
}
