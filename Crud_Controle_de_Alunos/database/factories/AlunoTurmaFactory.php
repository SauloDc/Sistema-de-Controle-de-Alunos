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
        $aluno = Aluno::query()->inRandomOrder()->first();
        return [
            'aluno_id' => $aluno->id,
            'turma_id' => Turma::query()->where('escola_id', $aluno->escola_id)->inRandomOrder()->first()->id,
        ];
    }
}
