<?php

use App\Http\Controllers\{AlunoController, EscolaController, TurmaController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect(route('Escola.index'));
});

Route::resources([
    'Aluno' => AlunoController::class,
    'Escola' => EscolaController::class,
    'Turma' => TurmaController::class,
]);
