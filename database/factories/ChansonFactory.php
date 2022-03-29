<?php

namespace Database\Factories;

use App\Models\Chanson;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chanson>
 */
class ChansonFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Chanson::class;

    public function definition()
    {
        return [
            'img' => $this->faker->imageUrl($width = 640, $height = 480),
            'titre' => $this->faker->word(),
            'annee' => $this->faker->date(),
            'auteur' => $this->faker->lastName()
        ];
    }
}
