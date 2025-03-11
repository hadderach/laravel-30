<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Employer;
use App\Models\Tag;

class JobListing extends Model
{
  use HasFactory;
  protected $fillable = ['title', 'salary', 'employer_id'];

  public function employer()
  {
    return $this->belongsTo(Employer::class);
  }

  public function tags()
  {
    return $this->belongsToMany(Tag::class, 'job_listing_tags');
  }
}