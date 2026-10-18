<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        $movies = [
            ['Inception', 'Sci-Fi', 148, 2010,
             'Seorang pencuri ide yang menyusup ke dalam mimpi diberi tugas mustahil: menanamkan sebuah gagasan ke benak target. Semakin dalam lapisan mimpi, semakin tipis batas antara kenyataan dan ilusi.',
             'inception.jpg'],
            ['The Dark Knight', 'Action', 152, 2008,
             'Batman, Jim Gordon, dan Harvey Dent berusaha membersihkan Gotham dari kejahatan terorganisir, namun muncul Joker yang menebar kekacauan dan menguji batas moral sang kesatria kegelapan.',
             'the-dark-knight.jpg'],
            ['Interstellar', 'Sci-Fi', 169, 2014,
             'Saat bumi tak lagi layak dihuni, sekelompok astronot melewati lubang cacing untuk mencari planet baru bagi umat manusia, sambil bergulat dengan waktu dan janji kepada keluarga di bumi.',
             'interstellar.jpg'],
            ['Parasite', 'Thriller', 132, 2019,
             'Keluarga miskin Ki-taek satu per satu menyusup bekerja di rumah keluarga kaya Park. Hubungan yang tampak menguntungkan itu perlahan berubah menjadi tegang dan tak terduga.',
             'parasite.jpg'],
            ['Spirited Away', 'Animation', 125, 2001,
             'Chihiro, gadis sepuluh tahun, tersesat di dunia roh dan harus bekerja di sebuah pemandian demi menyelamatkan orang tuanya yang berubah menjadi babi dan menemukan jalan pulang.',
             'spirited-away.jpg'],
            ['The Godfather', 'Crime', 175, 1972,
             'Kisah keluarga mafia Corleone di New York. Ketika sang pemimpin keluarga diserang, putra bungsunya yang semula menjauh dari bisnis keluarga terseret menjadi penerus kekuasaan.',
             'the-godfather.jpg'],
            ['Laskar Pelangi', 'Drama', 124, 2008,
             'Sepuluh anak dari keluarga sederhana di Belitung bersekolah di SD Muhammadiyah yang nyaris roboh. Dengan bimbingan guru yang penuh dedikasi, mereka berani bermimpi setinggi langit.',
             'laskar-pelangi.jpg'],
            ['KKN di Desa Penari', 'Horror', 130, 2022,
             'Sekelompok mahasiswa menjalani Kuliah Kerja Nyata di sebuah desa terpencil. Pelanggaran terhadap pantangan setempat membuat mereka diteror oleh makhluk gaib yang menghuni desa itu.',
             'kkn-di-desa-penari.jpg'],
            ['Avengers: Endgame', 'Action', 181, 2019,
             'Setelah kehancuran akibat Thanos, para Avengers yang tersisa berkumpul kembali untuk upaya terakhir memulihkan alam semesta dan membalikkan apa yang telah hilang.',
             'avengers-endgame.jpg'],
            ['Your Name', 'Animation', 106, 2016,
             'Mitsuha, gadis desa, dan Taki, pelajar Tokyo, tiba-tiba saling bertukar tubuh di dalam mimpi. Saat mereka mulai saling mengenal, sebuah rahasia besar tentang waktu pun terungkap.',
             'your-name.jpg'],
        ];

        foreach ($movies as [$title, $genre, $duration, $year, $description, $poster]) {
            Movie::create([
                'title'        => $title,
                'genre'        => $genre,
                'duration'     => $duration,
                'release_year' => $year,
                'description'  => $description,
                'poster'       => $poster,
            ]);
        }
    }
}
