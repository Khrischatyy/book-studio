<?php

namespace App\Repositories;

use App\Models\City;
use App\Models\Company;
use App\Repositories\Interfaces\CompanyRepositoryInterface;

class CompanyRepository implements CompanyRepositoryInterface
{
    public function getCompaniesByCityId(int $cityId)
    {
        return City::whereId($cityId)->with('companies.addresses.badges')->first();
    }

    public function getCompanyBySlug(string $slug)
    {
        return Company::where('slug', $slug)->with(['badges', 'cities', 'addresses'])->first();
    }
}
