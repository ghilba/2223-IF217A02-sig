<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'title' => 'Tempat Nongkrong Asik',
            'content' => 'Waw tempat nongkrongnya sangat asik sekali',
            'status' => 1,
            'author_id' => 2,
            'category_id' => 3,
            'date_posted' => '2022-11-17',
            'date_updated' => '2022-11-17',
        ]);
    }
}
