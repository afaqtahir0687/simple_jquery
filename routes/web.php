<?php

use App\Http\Controllers\CountryController;
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

Route::get('get/states/{country_id}',[CountryController::class,'getStates']);
Route::get('get/tehsil/{state_id}',[CountryController::class,'getTehsil']);
Route::get('get/school/{school_id}',[CountryController::class,'getSchool']);

Route::get('country/index', [App\Http\Controllers\CountryController::class, 'index']);

Route::get('college/index', [App\Http\Controllers\CollegeController::class, 'index']);
Route::get('college/teacher/{college_id}', [App\Http\Controllers\CollegeController::class, 'getTeacher']);

Route::get('suggetion/index', [App\Http\Controllers\SuggetionController::class, 'index']);
Route::get('suggetion/create', [App\Http\Controllers\SuggetionController::class, 'create']);

Route::get('percent/index', [App\Http\Controllers\PercentController::class, 'index']);


Route::get('form/create', [App\Http\Controllers\FormController::class, 'create']);

