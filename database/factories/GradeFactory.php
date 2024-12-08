<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\Types\Nullable;

class GradeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Grade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => Course::factory(),
            'course_name' => $this->faker->text,
            'test_type' => $this->faker->text,
            'lowest_passing_grade' => 5.5,
            'best_grade' => $this->faker->numberBetween(0, 10)
        ];
    }
}
