<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Models\City;
use App\Models\Company;
use App\Models\Country;
use App\Repositories\CompanyRepository;
use App\Services\CompanyService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CompanyController extends BaseController
{
    public function __construct(protected CompanyService $companyService)
    {}

    public function getCountries(): \Illuminate\Http\JsonResponse
    {
        $countries = Country::all();

        return $this->sendResponse($countries, 'Countries received');
    }

    public function getCitiesAndStudiosByCountryId(int $countryId): \Illuminate\Http\JsonResponse
    {
        $cityWithCompanies = City::where('id', $countryId)->with('companies')->get();

        return $this->sendResponse($cityWithCompanies, 'Cities and companies received');
    }

    public function getStudios(int $cityId)
    {

    }

    public function getPlaces(int $cityId)
    {

    }

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
//        $allReservedTime = Company::find($companyId)->with('booking')->first();
        $allReservedTime = Company::find($companyId)->with('places')->get();

        dd($allReservedTime);
    }
}
