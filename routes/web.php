<?php

use App\Exports\UsersExport;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\UsersExportController;
use App\Http\Controllers\UsersImportController;
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


Route::get('/users/export', [UsersExportController::class, 'export']);
// Route::get('/users/export', [ExportController::class, 'export']);
Route::get('/users/import', [UsersImportController::class, 'show']);
Route::post('/users/import', [UsersImportController::class, 'store']);
