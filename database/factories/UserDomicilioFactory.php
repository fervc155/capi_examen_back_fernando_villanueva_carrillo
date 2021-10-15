<?php

namespace Database\Factories;

use App\Models\UserDomicilio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserDomicilioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserDomicilio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_domicilio' => $this->faker->address(),
            'numero_exterior' => $this->faker->buildingNumber(),
            'colonia' => $this->faker->city(),
            'cp' =>  $this->faker->numerify('#####'),
            'ciudad' =>  $this->faker->city(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
 
}
