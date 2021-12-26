<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'NTA',
            'email' => 'admin@nta.nsw.edu.au',
            'password' => Hash::make('nta@dmin2021'),
            'isAdmin' => '0',
        ]);

        User::create([
            'name' => 'Quadque',
            'email' => 'admin@quadque.tech',
            'password' => Hash::make('quadque@2020'),
            'isAdmin' => '1',
        ]);
    }
}
