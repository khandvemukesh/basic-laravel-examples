<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\libarie;

class LibariesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      libarie::create([
            'address'=>'Patel School Khanjanpur Betul Madhye Pardesh',
           
        ]);
    }
}
