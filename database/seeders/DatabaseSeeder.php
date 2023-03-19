<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('roles')->insert([
            'nama' => 'Admin',
        ]);
        DB::table('roles')->insert([
            'nama' => 'Kaprodi',
        ]);
        DB::table('roles')->insert([
            'nama' => 'Dosen',
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('qpwoei123'),
            'foto' => 'Foto2.jpg',
            'role'=>1,
        ]);

        DB::table('users')->insert([
            'name' => 'chef de departement',
            'email' => 'user4@gmail.com',
            'password' => Hash::make('qpwoei123'),
            'foto' => 'foto.jpg',
            'role'=>2,
        ]);

        DB::table('users')->insert([
            'name' => 'amir ',
            'email' => 'user3@gmail.com',
            'password' => Hash::make('qpwoei123'),
            'foto' => 'foto.jpg',
            'role'=>3,
        ]);

        DB::table('users')->insert([
            'name' => ' anas',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('qpwoei123'),
            'foto' => 'foto.jpg',
            'role'=>3,
        ]);

        DB::table('users')->insert([
            'name' => ' amir',
            'email' => 'use@gmail.com',
            'password' => Hash::make('qpwoei123'),
            'foto' => 'foto.jpg',
            'role'=>3,
        ]);
    }
}
