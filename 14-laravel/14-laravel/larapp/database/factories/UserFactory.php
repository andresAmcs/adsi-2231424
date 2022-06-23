<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $random = rand(1,2);

        if($random == 1){
            $genero = 'male';
            $resp = $this->faker->name($genero);
        }else{
            $genero = 'female';
            $resp = $this->faker->name($genero);
        }
        return [
            'fullname' => $resp,
            'email' => $this->faker->unique()->safeEmail(),
            'phone' =>$this->faker->numberBetween($min=310000000,$max=39999999999),
            'birthdate'=>$this->faker->date(),
            'gender'=>$genero,
            'address'=>$this->faker->address(),
            'email_verified_at' => now(),
            'password' => $this->faker->password(), // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
