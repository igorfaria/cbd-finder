<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $names = [
            'CBD', 'Weed', 'Green', 'Magical',
            'Hemp', 'Peace & Weed', 'CB Weed', 'Geeen Culture',
            'Magic Plant'
        ];
        $nameSuffix = $names[\mt_rand(0,\count($names)-1)];
        $name = $nameSuffix . ' ' . fake()->company();
        return [
            'name' => $name,
            'logo' => fake()->imageUrl(
                640, 640,
                null, true, $nameSuffix, false
            ),
        ];
    }
}
