<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    public function run(): void
    {
        Writer::create(['name' => 'John Doe', 'bio' => 'Pengajar Data Science']);
        Writer::create(['name' => 'Jane Smith', 'bio' => 'Ahli Keamanan Jaringan']);
        Writer::create(['name' => 'Alice Johnson', 'bio' => 'Desainer Multimedia']);
        Writer::create(['name' => 'Bob Brown', 'bio' => 'Developer Software']);
    }
}
