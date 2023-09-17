<?php

namespace Database\Seeders;

use App\Models\currency_orders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderCurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       currency_orders::factory(20)->create();
    }
}
