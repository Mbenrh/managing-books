<?php

use App\Http\Controllers\LivreController;
use Illuminate\Support\Facades\Route;

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
    return view('student');
});
Route::get('ajoutLivresAuteurs', [LivreController::class, 'AjoutLivreAuteur']);
Route::get('afficheLivresParAuteur/{id}', [LivreController::class, 'afficheLivresParAuteur']);
