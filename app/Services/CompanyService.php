<?php

namespace App\Services;

use App\Models\Company;

class CompanyService
{
    public function getCompany(string $slug)
    {
        $slug = mb_strtolower($slug);


        //TODO сделать исключение и обработать ошибку если компания не найдена

        return Company::where('slug', $slug)->with(['badges', 'cities', 'addresses'])->first();

    }
}
