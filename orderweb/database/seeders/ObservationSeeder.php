<?php

namespace Database\Seeders;

use App\Models\Observation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Observation::insert([
            ['description' => 'Perro bravo'],
            ['description' => 'Contador con candado'],
            ['description' => 'Contador inaccesible'],
            ['description' => 'Predio en construcción'],
            ['description' => 'No existe contador'],
        ]);
    }
}
