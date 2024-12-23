<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $channels = Channel::create([
           'name' => 'Jakarta Pusat',
            'slug' => Str::slug('Jakarta Pusat'),
        ]);

        Channel::create([
           'name' => 'Jakarta Utara',
            'slug' => Str::slug('Jakarta Utara'),
        ]);

        Channel::create([
           'name' => 'Jakarta Selatan',
            'slug' => Str::slug('Jakarta Selatan'),
        ]);

        Channel::create([
           'name' => 'Jakarta Barat',
            'slug' => Str::slug('Jakarta Barat'),
        ]);

        Channel::create([
           'name' => 'Jakarta Timur',
            'slug' => Str::slug('Jakarta Timur'),
        ]);
    }
}
