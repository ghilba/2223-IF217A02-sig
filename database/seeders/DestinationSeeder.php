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
            'coordinates' => '-7.4852045,109.2617381,7',
            'file_path' => 'Wahana Bermain',
        ]);
    }
}
