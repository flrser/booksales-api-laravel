<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
         [
            'id' => 1,
            'name' => 'Fiksi',
            'description' => 'Karya sastra yang bersifat imajinatif dan tidak berdasarkan fakta'
        ],
        [
            'id' => 2,
            'name' => 'Pengembangan Diri',
            'description' => 'Buku yang membantu pembaca meningkatkan kualitas hidup dan kemampuan pribadi'
        ],
        [
            'id' => 3,
            'name' => 'Manga',
            'description' => 'Komik atau novel grafis yang berasal dari Jepang'
        ],
        [
            'id' => 4,
            'name' => 'Fantasi',
            'description' => 'Karya yang mengandung unsur magis, supernatural, atau dunia imajiner'
        ],
        [
            'id' => 5,
            'name' => 'Distopia',
            'description' => 'Genre yang menggambarkan masyarakat fiksi dalam keadaan yang tidak diinginkan'
        ],
    ];

    public function getGenres() {
        return $this->genres;
    }
}
