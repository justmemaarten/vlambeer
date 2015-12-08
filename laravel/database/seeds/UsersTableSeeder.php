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
        DB::table('tbl_users')->truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i <10; $i++)
        {
            switch (mt_rand(1, 4)) {
            case 1:
                $insertion = 'van';
                break;

            case 2:
                $insertion = 'de';
                break;

            case 3:
                $insertion = 'van der';
                break;

            default:
                $insertion = '';
        }
            $city2 = "";
            $street2 = "";
            $house_nr2 = "";
            $postalcode2 = "";


            if (mt_rand(1, 2) == 1) {
                $street2 = $faker->streetName;
                $house_nr2 = $faker->numberBetween(0, 2000);
                $postalcode2 = $faker->postcode;
                $city2 = $faker->city;
            }


            \App\User::create([


                'username' => $faker->userName,
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'email' => $faker->email,

                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'insertion' => $insertion,

                'phone_nr' => $faker->phoneNumber,
                'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now') . " " . $faker->time($format = 'H:i:s', $max = 'now'),
                'city' => $faker->city,
                'street' => $faker->streetName,
                'house_nr' => $faker->numberBetween(0, 2000),
                'postalcode' => $faker->postcode,

                'city2' => $city2,
                'street2' => $street2,
                'house_nr2' => $house_nr2,
                'postalcode2' => $postalcode2



            ]);
        }


    }
}
