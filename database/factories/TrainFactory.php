<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'acengy' => fake() -> company(),
            'start_station' => fake() -> city(),
            'end_station' => fake() -> city(),
            'start_time' => fake() -> dateTimebetween('now', '+3 days'),
            'end_time' => fake() -> dateTimebetween('4 days', '+1 week'),
            'code' => fake() -> unique() -> numerify('train-#####'),
            'num_vag' => fake() -> numberBetween(0, 100),
            // 'delay' => fake() ->,
            // 'deleted' => fake() ->,
        ];
    }
}
