<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Models\City;
use App\Models\Country;
use App\Services\CityService;
use App\Services\CompanyService;
use Illuminate\Http\Request;

class CityController extends BaseController
{
    public function __construct(protected CityService $cityService)
    {}

    public function getCitiesByCountryId($countryId): \Illuminate\Http\JsonResponse
    {
        $country = $this->cityService->getCitiesByCountryId($countryId);

        return $this->sendResponse($country, 'Cities received');
    }
}
