<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::create(['writer_id' => 1, 'title' => 'Apa Itu Data Science?', 'content' => 'Penjelasan tentang Data Science', 'views' => 10, 'image_url' => null]);
        Article::create(['writer_id' => 2, 'title' => 'Cara Meningkatkan Keamanan Jaringan', 'content' => 'Tips Keamanan Jaringan', 'views' => 20, 'image_url' => null]);
        Article::create(['writer_id' => 3, 'title' => 'Desain Multimedia untuk Pemula', 'content' => 'Panduan desain multimedia', 'views' => 15, 'image_url' => null]);
        Article::create(['writer_id' => 4, 'title' => 'Pengenalan Pengembangan Software', 'content' => 'Langkah-langkah pengembangan software', 'views' => 5, 'image_url' => null]);
    }
}
