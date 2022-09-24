<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $district = fake()->city();
        $city = fake()->city();
        $locality = fake()->city();
        $street = fake()->streetAddress();
        $number = fake()->secondaryAddress();
        $fullAddress = implode(', ', [
            $street, $number, $locality,
            $city, $district

        ]);
        return [
            'store_id' => 0,
            'full' => $fullAddress,
            'district' => $district,
            'city' => $city,
            'locality' => $locality,
            'street' => $street,
            'number' => $number,
            'postal_code' => fake()->postcode(),
            'latitude' => fake()->latitude(37.29620,41.79452),
            'longitude' => fake()->longitude(-7.59221, -8.24432),
        ];
    }
}
