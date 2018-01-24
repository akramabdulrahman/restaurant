<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //take all te initial roles for the system from the config file 'config/roles.php' then store them in te database
        collect(config('roles'))->each(function ($role) {
             \App\Role::create(['name' => $role]);
        });
    }
}
