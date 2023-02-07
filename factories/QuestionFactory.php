<?php

namespace Database\Factories;

use App\Models\Questionnaire;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public static $counter = 0;

    public function definition()
    {
        $questionnaire_id = Questionnaire::all()->pluck('id')->toArray();
        return [
            'name' => str_pad(self::$counter++, 4, '0', STR_PAD_LEFT),
            'description'=> $this->faker->unique()->text(30),
            'questionnaire_id'=> $this->faker->randomElement($questionnaire_id),
        ];
    }

    public function initialize()
    {
        self::$counter = 0;
    }
}
