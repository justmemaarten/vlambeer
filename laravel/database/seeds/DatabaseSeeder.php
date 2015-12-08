<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        foreach ( scandir( "./database/seeds") as $file )
        {
            if ( !empty( str_replace( '.', '', $file ) ) && $file !== 'DatabaseSeeder.php' )
            {
                require_once $file;
            }
        }

        $this->call(UsersTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductsTableSeeder::class);


        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Model::reguard();
    }
}
