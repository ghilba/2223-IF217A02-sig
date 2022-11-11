<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Destination::create([
            'title' => 'Wahana Bermain',
            'description' => 'Area Nongrkong Terbagus',
            'city' => 'Bandung',
            'province' => 'Jawa Barat',
            'country' => 'Indonesia',
            'coordinates' => '-6.9324097,107.7136723',
            'file_path' => 'Wahana Bermain',
        ]);
    }
}
