<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\support\Facades\File;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           for($i = 1; $i <10; $i++){
             student::create([
            'name'=>fake()->name,
            'email'=>fake()->email,
            'city'=>fake()->city
             ]);
           }
            

        // $json=File::get(path:'database/jsons/students.json');

        //    $students=collect(json_decode($json));
        //    $students->each(function($student){
        //    student::create([
        //     'name'=>$student->name,
        //     'email'=>$student->email,
        //     'city'=>$student->city,
        //     'rollno'=>$student->rollno
        //      ]);
        //    });

       
    }
}
