<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonialFactory extends Factory
{

    protected $model = Testimonial::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name'  => $this->faker->firstName,
            'last_name'   => $this->faker->lastName,
            'message'     => $this->faker->sentence,
            'rating'      => $this->faker->numberBetween(0,5),
        ];
    }
}
