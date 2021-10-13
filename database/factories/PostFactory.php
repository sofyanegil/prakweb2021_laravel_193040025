<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(1, 4)),
            'slug' => $this->faker->slug(),
            // 'body' => '<p>' . implode('<p></p>', $this->faker->paragraphS(mt_rand(5, 10))) . '</p>',
            'body' => collect($this->faker->paragraphs(mt_rand(5, 20)))
                ->map(
                    fn ($p) => "<p>$p$p$p$p</p>"
                )->implode(''),
            'user_id' => mt_rand(1, 5),
            'category_id' => mt_rand(1, 5)
        ];
    }
}
