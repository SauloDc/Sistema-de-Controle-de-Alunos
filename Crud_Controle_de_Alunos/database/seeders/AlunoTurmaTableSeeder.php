<?php

namespace Database\Seeders;

use App\Models\AlunoTurma;
use Illuminate\Database\Seeder;

class AlunoTurmaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AlunoTurma::factory()->count(50)->create();
    }
}
