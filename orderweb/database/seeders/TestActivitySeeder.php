<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Technician;
use App\Models\TypeActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activity = new Activity();
        $activity->description = "Actividad de prueba 3";
        $activity->hours = 2;
        //FKs
        $technician = Technician::where('document', 1116222333)->first();
        $activity->technician_id = $technician->id;

        $type_activity = TypeActivity::where('id', 3)->first();
        $activity->type_activity_id = $type_activity->id;

        $activity->save();
    }
}
