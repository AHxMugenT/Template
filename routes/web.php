<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartialsController;

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

Route::get('123', function () {
    return view('welcome');
});

// START ROUTES SIDEBAR
Route::get('/', [PartialsController::class, 'dashboard']);
Route::get('/button', [PartialsController::class, 'button']);
Route::get('/typography', [PartialsController::class, 'typography']);
Route::get('/other', [PartialsController::class, 'other']);
Route::get('/widgets', [PartialsController::class, 'widgets']);
Route::get('/form', [PartialsController::class, 'form']);
Route::get('/tables', [PartialsController::class, 'tables']);
Route::get('/charts', [PartialsController::class, 'charts']);
// END ROUTES SIDEBAR
