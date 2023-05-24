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
            'nama' => 'admin departement',
        ]);
        DB::table('roles')->insert([
            'nama' => ' user',
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('qpwoei123'),
            'photo' => 'photo2.jpg',
            'role'=>1,
        ]);

        DB::table('users')->insert([
            'name' => 'chef de departement',
            'email' => 'user4@gmail.com',
            'password' => Hash::make('qpwoei123'),
            'photo' => 'photo.jpg',
            'role'=>2,
        ]);

        DB::table('users')->insert([
            'name' => 'amir ',
            'email' => 'user3@gmail.com',
            'password' => Hash::make('qpwoei123'),
            'photo' => 'photo.jpg',
            'role'=>3,
        ]);

        DB::table('users')->insert([
            'name' => ' anas',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('qpwoei123'),
            'photo' => 'photo.jpg',
            'role'=>3,
        ]);

        DB::table('users')->insert([
            'name' => ' amir',
            'email' => 'use@gmail.com',
            'password' => Hash::make('qpwoei123'),
            'photo' => 'photo.jpg',
            'role'=>3,
        ]);
        DB::table('meetings')->insert([
            [
                'title' => 'Réunion hebdomadaire de l\'équipe',
                'date' => '2023-06-01',
                'start_time' => '10:00:00',
                'end_time' => '11:00:00',
                'place' => 'Salle de conférence A',
                'leader' => 1,
                'minuter' => 2,
                'created_by' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Mise à jour de l\'état du projet',
                'date' => '2023-06-05',
                'start_time' => '14:00:00',
                'end_time' => '16:00:00',
                'place' => 'Salle de conférence B',
                'leader' => 2,
                'minuter' => 3,
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Présentation aux parents d\'élèves',
                'date' => '2023-06-10',
                'start_time' => '18:00:00',
                'end_time' => '20:00:00',
                'place' => 'Auditorium',
                'leader' => 4,
                'minuter' => 5,
                'created_by' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'title' => 'Réunion de planification des cours d\'anglais',
                'date' => '2023-06-15',
                'start_time' => '9:00:00',
                'end_time' => '11:00:00',
                'place' => 'Salle de conférence C',
                'leader' => 1,
                'minuter' => 5,
                'created_by' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Réunion de coordination des activités parascolaires',
                'date' => '2023-06-20',
                'start_time' => '13:00:00',
                'end_time' => '15:00:00',
                'place' => 'Salle de sport',
                'leader' => 3,
                'minuter' => 4,
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Réunion de préparation des examens de fin d\'année',
                'date' => '2023-06-25',
                'start_time' => '10:00:00',
                'end_time' => '12:00:00',
                'place' => 'Salle de conférence A',
                'leader' => 2,
                'minuter' => 1,
                'created_by' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Réunion de suivi des projets de recherche',
                'date' => '2023-06-28',
                'start_time' => '14:00:00',
                'end_time' => '16:00:00',
                'place' => 'Laboratoire de recherche',
                'leader' => 5,
                'minuter' => 3,
                'created_by' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Réunion de suivi des progrès des étudiants',
                'date' => '2023-06-30',
                'start_time' => '11:00:00',
                'end_time' => '12:00:00',
                'place' => 'Bureau du conseiller pédagogique',
                'leader' => 4,
                'minuter' => 2,
                'created_by' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]

        ]);
        //  notes table

        DB::table('notes')->insert(
            [

            [
                'users_id' => 1,
                'meetings_id' => 1,
                'isi' => '1',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'users_id' => 2,
                'meetings_id' => 2,
                'isi' => '2',
                'status' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'users_id' => 3,
                'meetings_id' => 3,
                'isi' => '3',
                'status' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'users_id' => 4,
                'meetings_id' => 4,
                'isi' => '4',
                'status' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'users_id' => 1,
                'meetings_id' => 1,
                'isi' => '1',
                'status' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'users_id' => 2,
                'meetings_id' => 2,
                'isi' => '2',
                'status' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'users_id' => 3,
                'meetings_id' => 3,
                'isi' => '3',
                'status' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'users_id' => 4,
                'meetings_id' => 4,
                'isi' => '4',
                'status' => '4',
                'created_at' => now(),
                'updated_at' => now(),
                ]]





        );




    }
}
