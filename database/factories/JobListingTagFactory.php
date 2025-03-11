<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tag;
use App\Models\JobListing;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory
 */
class JobListingTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'job_listing_id' => JobListing::factory(),
            'tag_id' => Tag::factory(),
        ];
    }
}
