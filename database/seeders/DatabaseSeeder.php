<?php

namespace Database\Seeders;

use App\Models\Local;
use Illuminate\Database\Seeder;
use File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UserSeeder::class);
        /*
        $contents = File::get(base_path('database/seeders/store_1_row.json'));

        $locales_json = json_decode(json: $contents, associative: true);

        $faker = \Faker\Factory::create();
        //$faker->addProvider(new Faker\Provider\Lorem($faker));


        foreach ($locales_json as $local) {
            Local::factory()->create([
                'users_id'     => $local['users_id'],
                'name'         => $local['name'],
                'position_lng' => $local['lang'],
                'position_lat' => $local['lat'],
                'phone'        => $faker->PhoneNumber(),
                'logo'         => 'n-image.png',
                'description'=> $faker->realText(255)
            ]);
        }

        $this->call(ProductSeeder::class);

        $this->call(SettingsSeeder::class);
        */
    }
}
