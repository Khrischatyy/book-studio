<?php

use App\Http\Controllers\API\CityController;
use App\Http\Controllers\API\CompanyController;
use App\Http\Controllers\API\CountryController;
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

});

Route::get('/countries', [CountryController::class, 'getCountries']);
Route::get('/cities/{countryId}', [CityController::class, 'getCitiesByCountryId']);
Route::get('/companies/{cityId}', [CompanyController::class, 'getCompaniesByCityId']);
