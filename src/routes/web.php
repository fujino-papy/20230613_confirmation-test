<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ManagementController;


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
    return view('welcome');
});
Route::get('/', [ContactController::class, 'index']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::get('/contacts/confirm', [ContactController::class, 'send']);
Route::post('/contacts/search', [ManagementController::class, 'search']);
Route::get('/contacts/search', [ManagementController::class, 'search']);
Route::get('/management', [ManagementController::class, 'index']);
Route::delete('/management/delete', [ManagementController::class, 'destroy']);