<?php

namespace Database\Factories;

use App\Models\Escola;
use App\Models\Turma;
use Illuminate\Database\Eloquent\Factories\Factory;

class TurmaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Turma::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nivel = $this->faker->randomElement(["Ensino Fundamental", "Ensino Médio"]);
        
        $serie = $nivel === "Ensino Fundamental" ? $this->faker->numberBetween(1 , 9) : $this->faker->numberBetween(1 , 3);    

        return [
            'ano'=> $this->faker->dateTimeThisDecade,
            'nivel'=> $nivel,
            'serie'=> $serie,
            'turno'=> $this->faker->randomElement(['Manhã', 'Tarde', 'Noite']),
            'escola_id' => Escola::query()->inRandomOrder()->first()->id 
        ];
    }
}
