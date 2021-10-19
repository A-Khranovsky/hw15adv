<?php

namespace Database\Factories;

use App\Models\Advt;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdvtFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Advt::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(rand(3,5) ,true),
            'description' => $this->faker->sentence(rand(16,18) ,true),
            'user_id' => \App\Models\User::factory()
        ];
    }
}
