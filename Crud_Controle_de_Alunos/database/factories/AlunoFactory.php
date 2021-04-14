<?php

namespace Database\Factories;

use App\Models\Aluno;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlunoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Aluno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            'nome' => $this->faker->name($gender),
            'telefone' => $this->faker->landline,
            'email' => $this->faker->email,
            'dataNascimento' => $this->faker->dateTimeThisCentury,
            'sexo' => $gender
        ];
    }
}
