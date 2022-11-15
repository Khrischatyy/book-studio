<?php

namespace App\Services;

use App\Models\Company;

class CompanyService
{
    public function getCompaniesByLetter (string $letter)
    {
        return Company::where('name', 'LIKE', "%{$letter}%")->get();
    }
}
