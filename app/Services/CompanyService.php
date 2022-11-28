<?php

namespace App\Services;

use App\Models\Badge;
use App\Repositories\CompanyRepository;

class CompanyService
{
    public function __construct(public CompanyRepository $companyRepository)
    {}

    public function getCompaniesByCityId($cityId)
    {
        return $this->companyRepository->getCompaniesByCityId($cityId)->map(function ($company) {
            $badgesId = array_values(json_decode($company->badges->badges_id, true));

            $company->badges = Badge::whereIn('id', $badgesId)->get();

            return $company;
        });

    }
}
