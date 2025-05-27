<?php

namespace Database\Factories;

use App\Models\AparModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class AparModelFactory extends Factory
{
    protected $model = AparModel::class;

    public function definition()
    {
        return [
            'namaBarang' => $this->faker->unique()->word,
            'stokBarang' => $this->faker->numberBetween(1, 100),
            'type' => $this->faker->randomElement(['Racking System', 'Fire Protection']),
            'deskripsi' => $this->faker->sentence,
            'berat' => $this->faker->numberBetween(1, 10) . 'kg',
            'harga' => $this->faker->numberBetween(100000, 1000000)
        ];
    }
}