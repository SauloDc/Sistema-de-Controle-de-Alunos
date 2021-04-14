<?php

namespace Database\Factories;

use App\Models\Aluno;
use App\Models\AlunoTurma;
use App\Models\Turma;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlunoTurmaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AlunoTurma::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'aluno_id' => Aluno::query()->inRandomOrder()->first()->id ,
            'turma_id' => Turma::query()->inRandomOrder()->first()->id ,
        ];
    }
}
