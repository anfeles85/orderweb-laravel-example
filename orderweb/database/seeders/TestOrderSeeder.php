<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = new Order();
        $order->legalization_date = '2024-01-22';
        $order->address = 'Cra 1 # 2-3';
        $order->city = 'TULUA';
        $order->observation_id = null;
        $order->causal_id = 1;
        $order->save();
    }
}
