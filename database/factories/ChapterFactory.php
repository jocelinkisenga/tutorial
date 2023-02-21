<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChapterFactory extends Factory
{
    protected $model = \App\Models\Chapter::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => Course::all()->random()->id,
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraphs(2,true),
            'video_url' => 'video.mp4',
        ];
    }
}
