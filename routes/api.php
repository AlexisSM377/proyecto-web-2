<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController\DietController;
use App\Http\Controllers\ApiController\ExpedientController;
use App\Http\Controllers\ApiController\FishbowlController;
use App\Http\Controllers\ApiController\FishController;
use App\Http\Controllers\ApiController\FoodController;
use App\Http\Controllers\ApiController\KindController;
use App\Http\Controllers\ApiController\ProductController;
use App\Http\Controllers\ApiController\RegisterController;
use App\Http\Controllers\ApiController\SexController;
use App\Http\Controllers\ApiController\SpecController;
use App\Http\Controllers\ApiController\TownshipController;

use App\Http\Controllers\ApiController\StateController;

use App\Http\Controllers\ApiController\TypeuserController;
use App\Http\Controllers\ApiController\UserController;

//para usar los cntroladores api de estados y municipios hace falta descomentar esto :p
use App\Http\Controllers\ApiController\EstadoController;
use App\Http\Controllers\ApiController\MunicipioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::Apiresource('diet',DietController::class);
Route::Apiresource('expedient',ExpedientController::class);
Route::Apiresource('fishbowl',FishbowlController::class);
Route::Apiresource('fish',FishController::class);
Route::Apiresource('food',FoodController::class);
Route::Apiresource('kind',KindController::class);
Route::Apiresource('product',ProductController::class);
Route::Apiresource('register',RegisterController::class);
Route::Apiresource('sex',SexController::class);
Route::Apiresource('spec',SpecController::class);
//state controller

Route::Apiresource('township',TownshipController::class);

Route::Apiresource('state',StateController::class);
Route::Apiresource('typeuser',TypeuserController::class);
Route::Apiresource('user',UserController::class);


//para usar los cntroladores api de estados y municipios hace falta descomentar esto :p
Route::apiresource('estados',EstadoController::class);
Route::apiresource('municipios',MunicipioController::class);