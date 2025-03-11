<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class JobListingTag extends Model
{
    use HasFactory;
    protected $fillable = [
        "job_listing_id",
        "tag_id",
    ];
}
