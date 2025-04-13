<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \Backpack\PermissionManager\app\Models\Role::create([
            'name' => 'admin',
        ]);

        \Backpack\PermissionManager\app\Models\Role::create([
            'name' => 'storeadmin',
        ]);

        \Backpack\PermissionManager\app\Models\Role::create([
            'name' => 'customer',
        ]);

        User::updateOrCreate([
            'name' => 'demo',
            'first_name' => 'Demo',
            'last_name' => 'demo',
            'email' => 'rodogonzalez@msn.com'
        ], [
            'name' => 'demo',
            'first_name' => 'Demo',
            'last_name' => 'Demo',
            'email' => 'rodogonzalez@msn.com',
            'password' => bcrypt('R0d0lfit0!')
        ]);


        $admin = User::updateOrCreate([
            'name' => 'Admin',
            'first_name' => 'Admin',
            'last_name' => 'admin',

        ], [
            'name' => 'Admin',
            'first_name' => 'Admin',
            'last_name' => 'admin',
            'email'=>'admin@superlocales.com',
            'password' => bcrypt('R0d0lfit0!')
        ]);


        $admin->assignRole('admin');


    }
}
