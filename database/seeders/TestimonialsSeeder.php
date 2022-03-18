<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( Faker $faker)
    {
        Testimonial::factory()->count(10)->create();
    }
}
