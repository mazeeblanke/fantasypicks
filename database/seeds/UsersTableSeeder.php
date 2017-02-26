<?php

use App\User;
use HttpOz\Roles\Models\Role;
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
        $adminRole = Role::whereSlug('administrator')->first();

        $admin = User::create([
            'name' => 'Jadon Brown',
            'email' => 'jaybeezorr@gmail.com',
            'password' => bcrypt('Jadonbrown')
        ]);

        $admin->attachRole($adminRole);

        User::create([
            'name' => 'Ronny',
            'email' => 'ronny.slivo@gmail.com',
            'password' => bcrypt('Jadonbrown')
        ]);
    }
}
