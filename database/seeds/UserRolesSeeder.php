<?php

use HttpOz\Roles\Models\Role;
use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Administrator',
            'slug' => 'administrator',
            'description' => 'Custodians of the system.', // optional
            'group' => 'default' // optional, set as 'default' by default
        ]);
    }
}
