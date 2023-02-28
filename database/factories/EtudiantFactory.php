<?php

namespace Database\Factories;

use App\Models\Etudiant;
use App\Models\Model;

use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{

    
    /**
     * Define the model's default state.
     *
     * @var string
     */
    protected $model = Etudiant::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'classe_id' => rand(1,7)
        ];
    }
}
