<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends BaseController
{
    public function getCities (): \Illuminate\Http\JsonResponse
    {
        $cities = City::all();

        return $this->sendResponse($cities, 'Cities received');
    }
}
