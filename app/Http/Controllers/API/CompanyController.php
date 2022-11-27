<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Models\City;
use App\Repositories\CompanyRepository;
use App\Services\CompanyService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CompanyController extends BaseController
{
    public function __construct(protected CompanyService $companyService)
    {}

    public function getCompaniesByCityId($cityId, CompanyRepository $companyRepository)
    {
        $companies = $companyRepository->getCompaniesByCityId($cityId);

        return $this->sendResponse($companies, 'Companies received');
    }
}
