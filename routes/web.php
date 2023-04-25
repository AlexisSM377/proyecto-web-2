<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeuserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SpecController;
use App\Http\Controllers\FishbowlController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KindController;
use App\Http\Controllers\SexController;
use App\Http\Controllers\DietController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\FishController;
use App\Http\Controllers\ExpedientController;
use App\Http\Controllers\StateController;
use NunoMaduro\Collision\Adapters\Phpunit\State;

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

Route::get('/index', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('municipios-estados/{id}',[StateController::class,'municipios']);
Route::resource('typeuser',TypeuserController::class);
Route::resource('user',UserController::class);
Route::resource('spec',SpecController::class);
Route::resource('fishbowl',FishbowlController::class);
Route::resource('register',RegisterController::class);
Route::resource('kind',KindController::class);
Route::resource('sex',SexController::class);
Route::resource('diet',DietController::class);
Route::resource('product',ProductController::class);
Route::resource('food',FoodController::class)->withTrashed();
Route::resource('fish',FishController::class);
Route::resource('expedient',ExpedientController::class);

Route::resource('estados',StateController::class);



