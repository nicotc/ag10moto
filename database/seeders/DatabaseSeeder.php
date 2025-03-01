<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Status;
use App\Models\StatusTranslation;
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

        $rol = \Spatie\Permission\Models\Role::create(['name' => 'Super Admin']);

        $user = User::create([
            'user_name' => 'nicotestagrossa',
            'first_name' => 'Nicolás',
            'last_name' => 'Testagrossa',
            'email' => 'nicotestagrossa@gmail.com',
            'password' => bcrypt('12345678'),
            'langs_id' => 1,
        ]);

        $user->assignRole('Super Admin');

        $rol = \Spatie\Permission\Models\Role::create(['name' => 'Admin']);
        $rol = \Spatie\Permission\Models\Role::create(['name' => 'User']);


       $status = Status::create([
            'model_name' => 'Orders',
            'name' => 'Pendiente',
            'color' => 'red',
        ]);

        StatusTranslation::create([
            'status_id' => $status->id,
            'langs_id' => 1,
            'name' => 'Pendiente',
        ]);

        StatusTranslation::create([
            'status_id' => $status->id,
            'langs_id' => 2,
            'name' => 'Pending',
        ]);

        StatusTranslation::create([
            'status_id' => $status->id,
            'langs_id' => 3,
            'name' => 'En attente',
        ]);


        $status = Status::create([
            'model_name' => 'Repairs',
            'name' => 'Pendiente',
            'color' => 'red',
        ]);

        StatusTranslation::create([
            'status_id' => $status->id,
            'langs_id' => 1,
            'name' => 'Pendiente',
        ]);

        StatusTranslation::create([
            'status_id' => $status->id,
            'langs_id' => 2,
            'name' => 'Pending',
        ]);

        StatusTranslation::create([
            'status_id' => $status->id,
            'langs_id' => 3,
            'name' => 'En attente',
        ]);
        

    }
}