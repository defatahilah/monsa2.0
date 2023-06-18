<?php

use App\Http\Controllers\FileController;
use App\Models\File;
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
    return view('welcome');
});

Route::get('/project', [FileController::class, 'index']);

//Coba Upload File
// Route::get('/files', [FilesController::class, 'success']);
// Route::post('/files', [FileController::class, 'create']);
// Route::post('/files', [FileController::class, 'store']);
Route::resource('/files', FileController::class);
