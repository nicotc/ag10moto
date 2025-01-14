<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->withPersonalTeam()->create();

        $rol = \Spatie\Permission\Models\Role::create(['name' => 'Super Admin']);

        $user = User::create([
            'user_name' => 'nicotestagrossa',
            'first_name' => 'Nicolás',
            'last_name' => 'Testagrossa',
            'email' => 'nicotestagrossa@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $user->assignRole('Super Admin');



        $rol = \Spatie\Permission\Models\Role::create(['name' => 'Admin']);
        $rol = \Spatie\Permission\Models\Role::create(['name' => 'User']);

        // crar 100 usuarios con rol user

        User::factory(1000)->withPersonalTeam()->create()->each(function ($user) {
            $user->assignRole('User');
        });

        // crar 10 usuarios con rol admin

        User::factory(10)->withPersonalTeam()->create()->each(function ($user) {
            $user->assignRole('Admin');
        });



    }
}
