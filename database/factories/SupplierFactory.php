<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_supplier' => $this->faker->unique()->randomElement(['PT. ABC', 'PT. DEF', 'PT. GHI', 'PT. JKL']),
            'no_telp' => $this->faker->phoneNumber(),
            'alamat' => $this->faker->address(),
        ];
    }
}
