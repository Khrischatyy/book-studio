<?php

namespace App\Services;

use App\Models\Country;

class CityService
{
    public function getCitiesByCountryId(string $countryId): \Illuminate\Database\Eloquent\Collection|array
    {
        return Country::where('id', $countryId)->with('cities')->get();
    }
}
