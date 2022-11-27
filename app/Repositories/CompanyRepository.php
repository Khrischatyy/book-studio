<?php

namespace App\Repositories;

use App\Models\Company;
use App\Models\CompanyCity;
use App\Repositories\Interfaces\CompanyRepositoryInterface;

class CompanyRepository implements CompanyRepositoryInterface
{
    public function getCompaniesByCityId(int $cityId)
    {
        return CompanyCity::where('city_id', $cityId)->with('company')->get();
    }
}
