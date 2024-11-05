<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        Course::create(['category_id' => 1, 'name' => 'Introduction to Data Science', 'description' => 'Dasar-dasar Data Science', 'content' => 'Konten Data Science']);
        Course::create(['category_id' => 2, 'name' => 'Network Security Basics', 'description' => 'Dasar-dasar Keamanan Jaringan', 'content' => 'Konten Network Security']);
        Course::create(['category_id' => 3, 'name' => 'Multimedia Design', 'description' => 'Desain Multimedia', 'content' => 'Konten Interactive Multimedia']);
        Course::create(['category_id' => 4, 'name' => 'Software Development', 'description' => 'Pengembangan Perangkat Lunak', 'content' => 'Konten Software Engineering']);
    }
}
