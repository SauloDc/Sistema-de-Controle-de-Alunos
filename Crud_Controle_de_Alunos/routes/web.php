<?php

use App\Http\Controllers\{StudentController, SchoolController, TeamController};
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


Route::group(['middleware' => 'bindings'], function () {

    Route::get('index/schools', [SchoolController::class, 'indexSchool'])->name('school.get.index'); //index
    Route::get('create/schools', [SchoolController::class, 'createSchool'])->name('school.get.create'); //create
    Route::get('edit/schools/{school}', [SchoolController::class, 'editSchool'])->name('school.get.edit'); //edit
    Route::put('update/schools/{school}', [SchoolController::class, 'updateSchool'])->name('school.put.update'); //update
    Route::get('view/schools/{school}', [SchoolController::class, 'viewSchool'])->name('school.get.view'); //show
    Route::post('store/schools', [SchoolController::class, 'storeSchool'])->name('school.post.store');; //store
    Route::delete('destroy/schools/{school}', [SchoolController::class, 'destroySchool'])->name('school.delete.destroy'); //destroy

    Route::get('index/student', [StudentController::class, 'indexStudent'])->name('student.get.index'); //index
    Route::get('create/student', [StudentController::class, 'createStudent'])->name('student.get.create'); //create
    Route::get('edit/student/{student}', [StudentController::class, 'editStudent'])->name('student.get.edit');//edit
    Route::put('update/student/{student}', [StudentController::class, 'updateStudent'])->name('student.put.update'); //update
    Route::get('view/student/{student}', [StudentController::class, 'viewStudent'])->name('student.get.view'); //show
    Route::post('store/student', [StudentController::class, 'storeStudent'])->name('student.post.store');; //store
    Route::delete('destroy/student/{student}', [StudentController::class, 'destroyStudent'])->name('student.delete.destroy'); //destroy

    Route::get('index/teams', [TeamController::class, 'indexTeam'])->name('team.get.index'); //index
    Route::get('create/teams', [TeamController::class, 'createTeam'])->name('team.get.create'); //create
    Route::get('edit/teams/{team}', [TeamController::class, 'editTeam'])->name('team.get.edit');//edit
    Route::put('update/teams/{team}', [TeamController::class, 'updateTeam'])->name('team.put.update'); //update
    Route::get('view/teams/{team}', [TeamController::class, 'viewTeam'])->name('team.get.view'); //show
    Route::post('store/teams', [TeamController::class, 'storeTeam'])->name('team.post.store');; //store
    Route::delete('destroy/teams/{team}', [TeamController::class, 'destroyTeam'])->name('team.delete.destroy'); //destroy
    
    Route::get('/', function () {
        return redirect(route('school.get.index'));
    });
});






// Route::resources([
//     'Aluno' => AlunoController::class,
//     'Escola' => EscolaController::class,
//     'Turma' => TurmaController::class,
// ]);
