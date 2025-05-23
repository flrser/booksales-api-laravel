<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Thriller',
            'decription' => 'Genre yang menegangkan dengan alur penuh ketegangan dan kejutan.'
        ]);

        Genre::create([
            'name' => 'Drama',
            'decription' => 'Genre yang fokus pada cerita emosional dan konflik antar karakter.'
        ]);

        Genre::create([
            'name' => 'Science Fiction',
            'decription' => 'Genre yang mengeksplorasi teknologi, masa depan, dan ilmu pengetahuan.'
        ]);

        Genre::create([
            'name' => 'Horror',
            'decription' => 'Genre yang bertujuan menakut-nakuti penonton dengan elemen menyeramkan dan supranatural.'
        ]);

        Genre::create([
            'name' => 'Comedy',
            'decription' => 'Genre yang bertujuan menghibur dan membuat penonton tertawa melalui humor.'
        ]);
    }
}
