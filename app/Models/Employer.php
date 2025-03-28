<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\JobListing;

class Employer extends Model
{

    use HasFactory;

    public function jobs(): HasMany
    {
        return $this->hasMany(JobListing::class);
    }
}
