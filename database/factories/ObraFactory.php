<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Obra>
 */
class ObraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'titulo' => $this->faker->word(),
            'descripcion' => $this->faker->sentence(),
            'img_url' => 'https://picsum.photos/300/200',
            'categoria' => $this->faker->word(),
            'estado' => $this->faker->randomElement(['pendiente', 'aprobada', 'rechazada']),
            'user_id' => $this->faker->numberBetween(1,3),
        ];
    }
}
