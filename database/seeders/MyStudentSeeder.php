<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MyStudent;

class MyStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {/*
        $seged = new MyStudent();
        $seged->name = "Hapci";
        $seged->my_class_id = 1;
        $seged->save();

        $seged = new MyStudent();
        $seged->name = "Morgó";
        $seged->my_class_id = 2;
        $seged->save();

        $seged = new MyStudent();
        $seged->name = "Kuka";
        $seged->my_class_id = 1;
        $seged->save();*/

        MyStudent::factory()->count(50)->create();
    }
}
