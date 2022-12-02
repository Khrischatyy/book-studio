<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function badges(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Badge::class, 'company_badge');
    }

    public function cities()
    {
        return $this->belongsToMany(City::class,'company_city');
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
