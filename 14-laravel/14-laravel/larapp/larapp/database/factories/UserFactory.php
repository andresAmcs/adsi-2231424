<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Date;
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
        $genero = $this->faker->randomElement($array = array('female', 'male'));

        $photo = $this->faker->image();

        if($genero == 'female'){
            $name = $this->faker->firstNameFemale();
        }else {
            $name = $this->faker->firstNameMale();
        }

        // $random=rand(1,2);
        
/*         if($random == 1){
            $genero = 'male';
            $resp = $this->faker->name($genero);

        }else{
            $genero = 'female';
            $resp = $this->faker->name($genero);
        } */

        // $año = $this->faker->year('+10 years');
        //$this->faker->dateTimeBetween($startDate = '-62 years', $endDate = '-37 years')

        // $dateOfBirth = "15-06-1995";
        // $today = date("Y-m-d");
        // $diff = date_diff(date_create($dateOfBirth), date_create($today));
        
        

        return [
            'fullname' => $name . ' ' . $this->faker->lastname(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->numberBetween($min = 3100000000, $max = 3200000000),
            'birthdate' => $this->faker->dateTimeBetween($startDate = '-62 years', $endDate = '-37 years'),
            'gender' => $genero,
            'address' => $this->faker->address(),
            'email_verified_at' => now(),
            'password' => $this->faker->password(), 
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
