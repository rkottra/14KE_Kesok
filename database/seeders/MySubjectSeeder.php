<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MySubject;
use Illuminate\Support\Facades\DB;

class MySubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seged = new MySubject();
        $seged->name = "Matematika";
        $seged->save();

        $seged = new MySubject();
        $seged->name = "Irodalom";
        $seged->save();

        DB::table("my_student_my_subject")->insert(
            ['my_student_id'=> 1,
             'my_subject_id' => 1,]
        );

        DB::table("my_student_my_subject")->insert(
            ['my_student_id'=> 1,
             'my_subject_id' => 2,]
        );

        DB::table("my_student_my_subject")->insert(
            ['my_student_id'=> 2,
             'my_subject_id' => 1,]
        );

        DB::table("my_student_my_subject")->insert(
            ['my_student_id'=> 3,
             'my_subject_id' => 2,]
        );
    }
}
