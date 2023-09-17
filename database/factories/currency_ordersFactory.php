<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\currency_orders>
 */
class currency_ordersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'time' => fake()->date(),
            'pair' => 'BTC',
            'type' => fake()->boolean(),
            'price' => '$1,000',
            'amount' => '$25,000',
        ];
    }
}
