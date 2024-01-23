<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Order;
use App\Models\OrderActivity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestOrderActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = Order::find(2);
        $activity = Activity::find(1); 

        //$order->activities()->attach($activity->id);
        $order->activities()->detach($activity->id);
    }
}
