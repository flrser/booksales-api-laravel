<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'id' => 1,
            'name' => 'Tere Liye',
            'bio' => 'Penulis novel terkenal asal Indonesia yang telah menerbitkan banyak karya bestseller'
        ],
        [
            'id' => 2,
            'name' => 'Mark Manson',
            'bio' => 'Penulis blog dan buku self-help terkenal dengan gaya penulisan yang blak-blakan'
        ],
        [
            'id' => 3,
            'name' => 'Masashi Kishimoto',
            'bio' => 'Mangaka Jepang yang terkenal dengan serial Naruto'
        ],
        [
            'id' => 4,
            'name' => 'J.K. Rowling',
            'bio' => 'Penulis Inggris terkenal dengan seri Harry Potter yang mendunia'
        ],
        [
            'id' => 5,
            'name' => 'George Orwell',
            'bio' => 'Penulis dan jurnalis Inggris yang terkenal dengan karya-karya kritik sosial'
        ],
    ];

    public function getAuthors()
    {
        return $this->authors;
    }
}
