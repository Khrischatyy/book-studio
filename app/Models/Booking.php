<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function company (): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Company::class);
    }
}
