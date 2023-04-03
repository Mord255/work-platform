<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            'id_user' => 1,
            'name' => "Jean Franco",
            'lastname' => "Ponte Solis",
            'username' => "admin",
            'email' => "admin@gmail.com",
            'password' => "3715614",
            'gender' => "masculino",
            'age' => "22",
            'id_rol' => 1,
            'birthdate' => '2000-11-25',
            'ubication' => 'MI CASA',
            'state' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('user')->insert([
            'id_user' => 2,
            'name' => "Administrador",
            'lastname' => "",
            'username' => "administrador",
            'email' => "administrador@gmail.com",
            'password' => "admin",
            'gender' => "masculino",
            'age' => "25",
            'id_rol' => 1,
            'birthdate' => '2000-11-30',
            'ubication' => 'MI CASA XD',
            'state' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
