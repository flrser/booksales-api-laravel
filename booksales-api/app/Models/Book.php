<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    private $books = [
        [
            'title' => 'Pulang',
            'description' => 'Petualangan seorang pemuda yang kembali ke desa kelahirannya.',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1,
        ],
        [
            'title' => 'Sebuah Seni untuk Bersikap Bodo Amat',
            'description' => 'Buku yang membahas tentang kehidupan dan filosofi hidup seseorang.',
            'price' => 25000,
            'stock' => 5,
            'cover_photo' => 'sebuah_seni.jpg',
            'genre_id' => 2,
            'author_id' => 2,
        ],
        [
            'title' => 'Naruto',
            'description' => 'Buku yang membahas tentang jalan ninja seseorang.',
            'price' => 30000,
            'stock' => 55,
            'cover_photo' => 'naruto.jpg',
            'genre_id' => 3,
            'author_id' => 3,
        ],
        [
            'title' => 'Laskar Pelangi',
            'description' => 'Kisah anak-anak dari Belitung yang penuh inspirasi.',
            'price' => 35000,
            'stock' => 25,
            'cover_photo' => 'laskar_pelangi.jpg',
            'genre_id' => 4,
            'author_id' => 4,
        ],
        [
            'title' => 'Pride and Prejudice',
            'description' => 'Kisah cinta klasik antara Elizabeth Bennet dan Mr. Darcy.',
            'price' => 45000,
            'stock' => 10,
            'cover_photo' => 'pride_and_prejudice.jpg',
            'genre_id' => 5,
            'author_id' => 5,
        ],
    ];

    public function getBooks() {
        return $this->books;
    }
}
