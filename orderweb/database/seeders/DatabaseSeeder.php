<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Technician;
use App\Models\TypeActivity;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*$this->call(RoleSeeder::class);
        $this->call(CausalSeeder::class);
        $this->call(ObservationSeeder::class);
        $this->call(TypeActivitySeeder::class);

        User::factory()->create([
            'role_id' => 1,
        ]);

        User::factory(3)->create([
            'role_id' => 2,
        ]);        

        Technician::factory()->create([
            'especiality' => 'Instalación de redes',
        ]);

        Technician::factory(2)->create([
            'especiality' => 'Construcción',
        ]);

        Technician::factory(2)->create([
            'especiality' => 'Lectura de redes',
        ]);

        Technician::factory(2)->create();

        $this->call(TestTechnicianSeeder::class);
        $this->call(TestActivitySeeder::class);
        $this->call(TestOrderSeeder::class);*/
        $this->call(TestOrderActivitySeeder::class);
    }
}
