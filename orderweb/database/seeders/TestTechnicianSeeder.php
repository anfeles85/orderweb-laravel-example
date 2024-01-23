<?php

namespace Database\Seeders;

use App\Models\Technician;
use App\Models\TypeActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestTechnicianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technician = new Technician();
        $technician->document = 989898;
        $technician->name = 'Arnulfo Archundia';
        $technician->especiality = 'Medición redes';
        $technician->phone = '315312';
        $technician->save();
    }
}
