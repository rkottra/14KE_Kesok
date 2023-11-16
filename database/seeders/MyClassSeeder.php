<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\MyClass;

class MyClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*DB::select("INSERT INTO my_classes (classname) VALUES ('9. A')");

        DB::table("my_classes")->insert(
            [
                "classname" => "9. B",
            ]
        );*/

        for ($evfolyam=9; $evfolyam <= 13; $evfolyam++) { 
            for ($osztaly="A"; $osztaly <= "E"; $osztaly++) { 
                $seged = new MyClass();
                $seged->classname = $evfolyam . ". ".$osztaly;
                $seged->save();        
            }
            
        }
        

    }
}
