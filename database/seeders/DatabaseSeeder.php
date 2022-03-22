<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Location;
use App\Models\Question;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Location::factory()->create([
            'name' => 'Bit Academy',
            'slug' => 'bit-academy',
        ]);

        Location::factory()->create([
            'name' => 'Groningen',
            'slug' => 'groningen',
        ]);

        Category::factory()->create([
            'name' => 'general',
            'slug' => 'general',
        ]);

        Category::factory()->create([
            'name' => 'address',
            'slug' => 'address',
        ]);

        Question::factory()->create([
            'title' => 'What is the name of the Bit Academy?',
            'question' => 'What is the name of the Bit Academy?',
            'slug' => 'what-is-the-name-of-the-bit-academy',
            'excerpt' => 'Bit Academy.',
            'answer' => 'Bit Academy.',
            'importance' => 1,
        ]);

        Question::factory()->create([
            'title' => 'What is the address of the Bit Academy?',
            'question' => 'What is the address of the Bit Academy?',
            'slug' => 'what-is-the-address-of-the-bit-academy',
            'excerpt' => 'No idea.',
            'answer' => 'No idea.',
            'importance' => 2,
        ]);

        Question::factory()->create([
            'title' => 'Is the Bit Academy based in Groningen?',
            'question' => 'Is the Bit Academy based in Groningen?',
            'slug' => 'is-the-bit-academy-based-in-groningen',
            'excerpt' => 'Yes. Maybe. I don\'t know.',
            'answer' => 'Yes. Maybe. I don\'t know.',
            'importance' => 3,
        ]);
    }
}
