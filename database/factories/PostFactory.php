<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title'=> $this->faker->sentence,
            'description'=>$this->faker->paragraph(6),
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(),
        ];
    }
}
