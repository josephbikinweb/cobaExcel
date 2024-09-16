<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'department' => fake()->companySuffix(),
            'position' => fake()->jobTitle(),
            'gender' => fake()->randomElement(['male', 'female']),
            'date_of_birth' => fake()->dateTimeBetween('1980-01-01', '2000-9-1'),
            'date_of_joining' => fake()->dateTimeBetween('2020-01-01', '2024-9-1'),
            'date_of_resignation' => fake()->dateTimeBetween('2050-01-01', '2050-9-1'),
            'salary' => fake()->randomFloat(10000000, 5000000000),
        ];
    }
}
