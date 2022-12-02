<?php

use App\Http\Controllers\API\AddressController;
use App\Http\Controllers\API\BookingController;
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
Route::get('/cities/{countryId}', [CityController::class, 'getCitiesByCountryId'])->where('countryId', '[0-9]+');
Route::get('/companies/{cityId}', [CompanyController::class, 'getCompaniesByCityId'])->where('cityId', '[0-9]+');
Route::get('/addresses/{cityId}', [AddressController::class, 'getAddressByCityId'])->where('cityId', '[0-9]+');

Route::post('/booking', [BookingController::class, 'getBookingByAddressId']);

Route::get('/{slug}', [CompanyController::class, 'getCompany']);
