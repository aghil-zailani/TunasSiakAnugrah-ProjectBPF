<?php

namespace Database\Factories;

use App\Models\keluar;
use Illuminate\Database\Eloquent\Factories\Factory;

class KeluarFactory extends Factory
{
    protected $model = keluar::class;

    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['Racking System', 'Fire Protection']),
            // Add other required fields here
        ];
    }
}