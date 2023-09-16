<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\lecture;
use Illuminate\support\Facades\File;

class LectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $json = File::get(path:'database/jsons/lectures.json');
        $lectures=collect(json_decode($json));
        $lectures->each(function($lecture){
            lecture::create([
              'name' => $lecture->name,
              'email' => $lecture->email,
              'age' => $lecture->age,
              'city' => $lecture->city,
            ]);
        });
    }
}
