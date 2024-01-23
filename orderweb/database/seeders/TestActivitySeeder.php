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
        $technician = Technician::where(
            'document', '=', 2253833400
        )->first();

        $typeActivity = TypeActivity::find(1);

        $activity = new Activity();
        $activity->description = 'test activity';
        $activity->hours = 10;
        $activity->technician_id = $technician->document;
        $activity->type_id = $typeActivity->id;
        $activity->save();        
    }
}
