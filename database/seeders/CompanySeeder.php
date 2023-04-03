<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('es_PE');

        foreach (range(1, 15) as $key) {
            DB::table('company')->insert([
                'id_company' => $key,
                'name' => $faker->company,
                'ruc' => $faker->unique()->numerify('###########'),
                'business_name' => $faker->companySuffix,
                'quantity_employees' => $faker->numberBetween($min = 1, $max = 10000),
                'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'ubication' => $faker->address,
                'state' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
