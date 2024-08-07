<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'category_id' => $this->faker->randomNumber(),
        'first_name'  => $this->faker->name,
        'last_name' => $this->faker->name,
        'gender' => $this->faker->numberBetween(1,3),
        'email' => $this->faker->safeEmail,
        'tell1' => $this->faker->shuffle(),
        'tell2' => $this->faker->shuffle(),
        'tell3' => $this->faker->shuffle(),
        'address' => $this->faker->country,
        'building' => $this->faker->city,
        'contact-form' => $this->faker->sentence,
        'detail'  => $this->faker->sentence
        ];
    }
}
