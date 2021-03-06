<?php

use App\Http\Controllers\BlogController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(BlogController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/dashboard', 'dashboard');
    Route::get('/bloglist', 'bloglist');
    Route::get('/{identifier}', 'show');
    Route::post('/store', 'store');
});
