<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Idiomas\Models\Lang;

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

        Lang::create([
            'lang' => 'Español',
            'iso' => 'es',
        ]);

        Lang::create([
            'lang' => 'Inglés',
            'iso' => 'en',
        ]);


        Lang::create([
            'lang' => 'Francés',
            'iso' => 'fr',
        ]);

    }
}
