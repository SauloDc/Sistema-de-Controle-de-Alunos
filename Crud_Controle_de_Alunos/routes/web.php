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
    Route::get('create/schools', [SchoolController::class, 'viewCreateSchool'])->name('school.get.create_view'); //create
    Route::get('update/schools/{school}', [SchoolController::class, 'viewEditSchool'])->name('school.get.edit_view'); //edit
    
    Route::post('new/schools', [SchoolController::class, 'newSchool'])->name('school.post.new'); //store
    Route::put('edit/schools/{school}', [SchoolController::class, 'editSchool'])->name('school.put.edit'); //update
    Route::delete('delete/schools/{school}', [SchoolController::class, 'deleteSchool'])->name('school.delete.delete'); //destroy
    Route::get('view/schools/{school}', [SchoolController::class, 'viewSchool'])->name('school.get.view'); //show  
});

Route::group(['middleware' => 'bindings'], function () {
    
    Route::get('index/students', [StudentController::class, 'indexStudent'])->name('student.get.index'); //index
    Route::get('create/students', [StudentController::class, 'viewCreateStudent'])->name('student.get.create_view'); //create
    Route::get('update/students/{student}', [StudentController::class, 'viewEditStudent'])->name('student.get.edit_view');//edit
    
    Route::post('new/students', [StudentController::class, 'newStudent'])->name('student.post.new');; //store
    Route::put('edit/students/{student}', [StudentController::class, 'editStudent'])->name('student.put.edit'); //update
    Route::delete('delete/students/{student}', [StudentController::class, 'deleteStudent'])->name('student.delete.delete'); //destroy
    Route::get('view/students/{student}', [StudentController::class, 'viewStudent'])->name('student.get.view'); //show
});

Route::group(['middleware' => 'bindings'], function () {
    Route::get('index/teams', [TeamController::class, 'indexTeam'])->name('team.get.index'); //index
    Route::get('create/teams', [TeamController::class, 'viewCreateTeam'])->name('team.get.create_view'); //create
    Route::get('update/teams/{team}', [TeamController::class, 'viewEditTeam'])->name('team.get.edit_view');//edit
    
    Route::post('new/teams', [TeamController::class, 'newTeam'])->name('team.post.new');; //store
    Route::put('edit/teams/{team}', [TeamController::class, 'editTeam'])->name('team.put.edit'); //update
    Route::delete('delete/teams/{team}', [TeamController::class, 'deleteTeam'])->name('team.delete.delete'); //destroy
    Route::get('view/teams/{team}', [TeamController::class, 'viewTeam'])->name('team.get.view'); //show
});

Route::get('/', function () {
    return redirect(route('school.get.index'));
});