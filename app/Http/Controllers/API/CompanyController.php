<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Models\Company;
use App\Repositories\CompanyRepository;
use App\Services\CompanyService;

class CompanyController extends BaseController
{
    public function __construct(public CompanyService $companyService)
    {}

    public function getCompaniesByCityId($cityId): \Illuminate\Http\JsonResponse
    {
        $companies = $this->companyService->getCompaniesByCityId($cityId);

        return $this->sendResponse($companies, 'Companies received');
    }
}
