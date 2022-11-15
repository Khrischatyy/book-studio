<?php

namespace App\Repositories\Interfaces;

interface CompanyRepositoryInterface
{
    public function getByCityId(int $cityId);
    public function getById(int $companyId);
}
