<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyCity extends Model
{
    use HasFactory;
    protected $table = 'company_city';

    public function company(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Company::class, 'id', 'company_id');
    }

    public function badges(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(CompanyBadge::class, 'company_id', 'company_id');
    }
}
