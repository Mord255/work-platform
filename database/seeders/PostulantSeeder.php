<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class PostulantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('es_PE');

        foreach (range(1, 20) as $key) {
            DB::table('postulant')->insert([
                'id_postulant' => $key,
                'name' => $faker->name,
                'lastname' => $faker->lastname,
                'gender' => $faker->randomElement(['masculino', 'femenino']),
                'age' => $faker->numberBetween($min = 18, $max = 80),
                'id_rol' => 2,
                'birthdate' => $faker->dateTimeBetween('-80 years', '-18 years')->format('Y-m-d'),
                'description' => $faker->sentence($nbWords = 10, $variableNbWords = true),
                'ubication' => $faker->address,
                'resume' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'university' => $faker->randomElement(['Universidad Cesar Vallejo','Universidad Tecnologica de Peru','Universidad Privada del Norte','Universidad Nacional de Ingenieria','San Marcos','Federico Villa Real']),
                'academic_degree' => $faker->randomElement(['tecnico','universitario','bachiller','maestria','doctorado']),
                'state' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
