<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Repositories\CompanyRepository;

class CompanyController extends BaseController
{
    public function getCompaniesByCityId($cityId, CompanyRepository $companyRepository): \Illuminate\Http\JsonResponse
    {
        $companies = $companyRepository->getCompaniesByCityId($cityId);

        return $this->sendResponse($companies, 'Companies received');
    }
}
