<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\citie;
use Illuminate\support\Facades\File;

class CitieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $json=File::get(path:'database/jsons/cities.json');
        $cities=collect(json_decode($json));
        $cities->each(function($citie){
            citie::create([
                'city_name' => $citie->city_name
            ]);
        });
    }
}
