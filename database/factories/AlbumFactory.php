<?php

namespace Database\Factories;

use App\Models\album;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = album::class;
    public function definition()
    {
        return [
            'nom' => $this->faker->word(),
            'maison disque' => $this->faker->company(),
            'style' => $this->faker->word(),
            'annee sortie' => $this->faker->date(),
            'albums vendu' => $this->faker->buildingNumber(),
        ];
    }
}
