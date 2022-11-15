<?php

use App\Http\Controllers\API\CityController;
use App\Http\Controllers\API\CompanyController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum'])->group(function () {
    //тут будут все защищенные санктумом роуты
});

Route::get('/cities', [CityController::class, 'getCities']);
Route::get('/studios/{cityId}', [CompanyController::class, 'getCompaniesByCityId']);
Route::get('/studio/{id}', [CompanyController::class, 'getCompanyById']);
Route::get('/search/{letter}', [CompanyController::class, 'searchCompanyByLetter']);
Route::get('/time/{studioId}', [CompanyController::class, 'getFreeTimes']);
