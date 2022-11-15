<?php

namespace App\Repositories;

use App\Models\Company;
use App\Repositories\Interfaces\CompanyRepositoryInterface;

class CompanyRepository implements CompanyRepositoryInterface
{
    public function getByCityId($cityId)
    {
        return Company::where('city_id', $cityId)->get();
    }
    public function getById($companyId)
    {
        return Company::where('id', $companyId)->first();
    }
}
