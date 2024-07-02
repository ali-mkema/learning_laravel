<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\EmpController;

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

/*
Route::get('/', function () {
   //return view('welcome');
    return ('hello world');
});
*/

  //Route::get('/', 'PagesController@index');

    Route::get('/', [EmpController::class,'index']);

    Route::get('/about', [PagesController::class,'about']);

    Route::get('/services', [PagesController::class,'services']);

    // Route::resource('emp', 'EmpController');

    Route::group(['prefix' => 'emp', 'as' => 'emp'], function () {
      Route::get('/create-emp', [EmpController::class, 'createEmp'])->name('create-emp');
      // Create function
      Route::post('/create', [EmpController::class, 'create'])->name('create');
      // Data retrieval route
      Route::get('/list-emp', [EmpController::class, 'index'])->name('index-emp');

      // Delete route
      Route::get('/delete-emp/{id}', [EmpController::class, 'destroy'])->name('delete-emp');

      // Modify route
      Route::get('/modify-emp/{id}', [EmpController::class, 'modify'])->name('modify-emp');

      // Update route
      Route::post('/update-emp', [EmpController::class, 'update'])->name('update-emp');

  });



 
