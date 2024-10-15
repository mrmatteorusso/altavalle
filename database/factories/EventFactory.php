<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Event::class;

    public function definition(): array
    {
        return [
            'event_name' => fake()->randomElement([
                'Tibetan Bells',
                'Botanic Garden Visit',
                'Walk for Peace',
                'claiming the Stelvio',
                'Eating Pizzoccheri together',
                'Ice Skating Gala',
                'Cycling together!'
            ]),
            'starting_time' => '08:00',
            'finishing_time' => '20:00',
            'is_new' => false,
            'is_featured' => false,
            'short_description' => fake()->paragraphs(1, true),
            'long_description' => fake()->paragraphs(rand(3, 7), true),
            'event_date' => '25 Sept',
            'location' => fake()->randomElement(
                [
                    'downtown',
                    'main church',
                    'library',
                    'council house',
                ]
            ),
            'tag' => fake()->randomElement([
                'ski',
                'bike',
                'relax',
                'ice skating',
                'trail running',
                'hiking',
                'mountaineering',
                'cross-country skiing',
                'downhill skiing',
            ]),
            'area' => fake()->randomElement([
                'Valdisotto',
                'Valdidentro',
                'Valfurva',
                'Bormio',
                'Livigno',
                'Sondalo',
            ]),
            'cover' => fake()->imageUrl(),

        ];
    }
}
