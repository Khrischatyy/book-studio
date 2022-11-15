<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Models\City;
use App\Models\Company;
use App\Repositories\CompanyRepository;
use App\Services\CompanyService;
use Illuminate\Http\Request;

class CompanyController extends BaseController
{
    public function __construct(protected CompanyService $companyService)
    {}

    public function getCompanyById (int $companyId, CompanyRepository $companyRepository): \Illuminate\Http\JsonResponse
    {
        $company = $companyRepository->getById($companyId);

        return $this->sendResponse($company, 'Companies received');
    }

    public function getCompaniesByCityId (int $cityId, CompanyRepository $companyRepository): \Illuminate\Http\JsonResponse
    {
        $companies = $companyRepository->getByCityId($cityId);

        return $this->sendResponse($companies, 'Companies received');
    }

    public function searchCompanyByLetter ($letter): \Illuminate\Http\JsonResponse
    {
        $companies = $this->companyService->getCompaniesByLetter($letter);


        return $this->sendResponse($companies, 'Companies received');
    }

    public function getFreeTimes ($companyId)
    {
        $company = Company::find($companyId)->first();

        dd($company);
    }
}
