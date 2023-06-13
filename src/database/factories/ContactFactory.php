<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{

    protected $Contact = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'family_name'=>$this->faker->lastName,
            'given_name' => $this->faker->firstName,
            'gender'=>$this->faker->randomElement($array = ['男性', '女性']),
            'email'=>$this->faker->safeEmail,
            'postcode'=>$this->faker->numberBetween(0,9),
            'address'=>$this->faker->address,
            'building_name'=>$this->faker->company,
            'content' => $this->faker->realText($maxNbChars = 50, $indexSize = 2),
            'created_at' =>$this->faker->date('Y-m-d H:i:s'),
            'updated_at' =>$this->faker->date('Y-m-d H:i:s'),
        ];
    }
}