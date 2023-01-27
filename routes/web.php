<?php

use App\Http\Controllers\studentController;
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
//     return view('show');
// });
/*Route::get('/', [studentController::class, 'show']);
Route::get('/insert', [studentController::class, 'create']);
Route::post('/welcome', [studentController::class, 'store']);*/
Route::resource('employee',studentController::class);