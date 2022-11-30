<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Repositories\CompanyRepository;

class CompanyController extends BaseController
{
    public function __construct(public CompanyRepository $companyRepository)
    {}

    public function getCompaniesByCityId($cityId): \Illuminate\Http\JsonResponse
    {
        $companies = $this->companyRepository->getCompaniesByCityId($cityId);

        return $this->sendResponse($companies, 'Companies received');
    }
}
