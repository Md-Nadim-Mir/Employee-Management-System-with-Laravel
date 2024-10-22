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

// post route create for update
Route::get('/{emp_id}/update', [EmployeeController::class,'edit'])->name('employees.edit');

Route::post('/{emp_id}/update', [EmployeeController::class,'update'])->name('employees.update');

// delete route
Route::delete('/{emp_id}/delete', [EmployeeController::class,'destroy'])->name('employees.delete');


//  serachig 
Route::get('/search', [EmployeeController::class,'search'])->name('employees.search');
