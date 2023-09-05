<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\EspecialidadeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.app');
});

// Rotas para Médico
Route::get('/medicos', [MedicoController::class, 'index']); 
Route::get('/medicos/create', [MedicoController::class, 'create'])->name('medicos.create');
Route::post('/medicos', [MedicoController::class, 'store'])->name('medicos.store');
Route::get('/medicos/{medico}/edit', [MedicoController::class, 'edit'])->name('medicos.edit');
Route::put('/medicos/{medico}', [MedicoController::class, 'update'])->name('medicos.update');
Route::delete('/medicos/{medico}', [MedicoController::class, 'destroy'])->name('medicos.destroy');
Route::get('/medicos', [MedicoController::class, 'index'])->name('medicos.index');

Route::get('/medicos/relatorio', [MedicoController::class, 'relatorio'])->name('medicos.relatorio');



// Rotas para Especialidade
Route::get('/especialidades', [EspecialidadeController::class, 'index']); 
Route::get('/especialidades/create', [EspecialidadeController::class, 'create'])->name('especialidades.create');
Route::post('/especialidades', [EspecialidadeController::class, 'store'])->name('especialidades.store');
Route::get('/especialidades/{especialidade}/edit', [EspecialidadeController::class, 'edit'])->name('especialidades.edit');
Route::put('/especialidades/{especialidade}', [EspecialidadeController::class, 'update'])->name('especialidades.update');
Route::delete('/especialidades/{especialidade}', [EspecialidadeController::class, 'destroy'])->name('especialidades.destroy');
Route::get('/especialidades', [EspecialidadeController::class, 'index'])->name('especialidades.index');