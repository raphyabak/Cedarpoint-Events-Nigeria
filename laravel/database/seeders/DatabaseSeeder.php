<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        $this->call(RoleSeeder::class);
        $user =  \App\Models\User::create([
              'name' => 'Raphael Abayomi',
              'email' => 'raphyabak@gmail.com',
              'password' => Hash::make('abakraphy'),
          ]);

          $user->assignRole('Admin');
    }
}
