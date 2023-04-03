<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rol')->insert([
            'id_rol' => 1,
            'name' => "Administrador",
            'name_internal' => "administrador",
            'area' => "Administracion",
            'state' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('rol')->insert([
            'id_rol' => 2,
            'name' => "Postulante",
            'name_internal' => "postulante",
            'area' => "Postulante",
            'state' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
