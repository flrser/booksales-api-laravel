<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Murder on the Orient Express',
            'description' => 'Sebuah pembunuhan terjadi di kereta api mewah, detektif Poirot menyelidiki kasus penuh teka-teki ini.',
            'price' => 75000,
            'stock' => 10,
            'cover_photo' => 'murder_orient_express.jpg',
            'genre_id' => 1, 
            'author_id' => 1, 
        ]);

        Book::create([
            'title' => 'Harry Potter and the Sorcerer\'s Stone',
            'description' => 'Petualangan si penyihir muda Harry Potter di sekolah sihir Hogwarts.',
            'price' => 85000,
            'stock' => 15,
            'cover_photo' => 'harry_potter_sorcerer_stone.jpg',
            'genre_id' => 3, 
            'author_id' => 2, 
        ]);

        Book::create([
            'title' => '1984',
            'description' => 'Kisah distopia tentang pengawasan ketat oleh pemerintah totaliter.',
            'price' => 65000,
            'stock' => 8,
            'cover_photo' => '1984.jpg',
            'genre_id' => 3, 
            'author_id' => 3, 
        ]);

        Book::create([
            'title' => 'It',
            'description' => 'Sekelompok anak menghadapi sosok jahat yang menakutkan dalam berbagai wujud, termasuk badut.',
            'price' => 70000,
            'stock' => 12,
            'cover_photo' => 'it.jpg',
            'genre_id' => 4, 
            'author_id' => 4, 
        ]);

        Book::create([
            'title' => 'Pride and Prejudice',
            'description' => 'Kisah cinta dan konflik sosial dalam masyarakat Inggris abad ke-19.',
            'price' => 60000,
            'stock' => 7,
            'cover_photo' => 'pride_and_prejudice.jpg',
            'genre_id' => 2, 
            'author_id' => 5, 
        ]);
    }
}
