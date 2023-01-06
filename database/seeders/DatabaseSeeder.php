<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        DB::table('users')->insert([
            'name' => 'SuperAdmin',
            'email' => 'super_admin@gmail.com',
            'password' => Hash::make('123456789'),
            'email_verified_at'=>time(),
            'approved'=>true
        ]);
    }
}
