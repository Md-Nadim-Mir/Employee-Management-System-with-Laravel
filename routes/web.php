<?php

use App\Http\Controllers\EmployeeController;
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

Route::get('/', [EmployeeController::class,'index'])->name('home');

//new 
Route::get('/{emp_id}/details', [EmployeeController::class,'details'])->name('employees.details');

// add employee route
Route::get('/create', [EmployeeController::class,'create'])->name('employees.create');

// post route create
Route::post('/store', [EmployeeController::class,'store'])->name('employees.store');

// post route create
Route::post('/{emp_id}/update', [EmployeeController::class,'update'])->name('employees.update');
