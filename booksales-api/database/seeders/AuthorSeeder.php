<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Agatha Christie',
            'bio' => 'Penulis misteri terkenal dengan karya-karya detektif seperti Hercule Poirot dan Miss Marple.'
        ]);

        Author::create([
            'name' => 'J.K. Rowling',
            'bio' => 'Penulis asal Inggris yang terkenal dengan seri fantasi Harry Potter.'
        ]);

        Author::create([
            'name' => 'George Orwell',
            'bio' => 'Penulis dan jurnalis yang dikenal lewat karya distopia seperti 1984 dan Animal Farm.'
        ]);

        Author::create([
            'name' => 'Stephen King',
            'bio' => 'Penulis horor dan thriller populer yang telah menulis lebih dari 60 novel.'
        ]);

        Author::create([
            'name' => 'Jane Austen',
            'bio' => 'Penulis Inggris yang dikenal dengan novel-novel klasik bertema cinta dan sosial seperti Pride and Prejudice.'
        ]);
    }
}
