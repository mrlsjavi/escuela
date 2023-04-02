<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([ /*1*/ 
            'name' => "Pre Matématicas",
        ]);
        DB::table('courses')->insert([ /*2*/ 
            'name' => "Pre Lectura",
        ]);
        DB::table('courses')->insert([ /*3*/ 
            'name' => "Medio Social y Natural",
        ]);
        DB::table('courses')->insert([ /*4*/ 
            'name' => "Motricidad",
        ]);
        DB::table('courses')->insert([ /*5*/ 
            'name' => "Inglés",
        ]);
        DB::table('courses')->insert([ /*6*/ 
            'name' => "Educacion Fisica",
        ]);
        DB::table('courses')->insert([ /*7*/ 
            'name' => "Computación",
        ]);
        DB::table('courses')->insert([ /*8*/ 
            'name' => "Rincones de Aprendizaje",
        ]);
        DB::table('courses')->insert([ /*9*/ 
            'name' => "Aprestamiento y Caligrafia",
        ]);
        DB::table('courses')->insert([ /*10*/ 
            'name' => "Comunicación y Lenguaje",
        ]);
        DB::table('courses')->insert([ /*11*/ 
            'name' => "Matématicas",
        ]);
        DB::table('courses')->insert([ /*12*/ 
            'name' => "Medio Social",
        ]);
        DB::table('courses')->insert([ /*13*/ 
            'name' => "Medio Natural",
        ]);
        DB::table('courses')->insert([ /*14*/ 
            'name' => "Expresion Artística",
        ]);
        DB::table('courses')->insert([ /*15*/ 
            'name' => "Formación Ciudadana",
        ]);
        DB::table('courses')->insert([ /*16*/ 
            'name' => "Tics / Computación",
        ]);
        DB::table('courses')->insert([ /*17*/ 
            'name' => "Caligrafia",
        ]);
        DB::table('courses')->insert([ /*18*/ 
            'name' => "Lectura",
        ]);
        DB::table('courses')->insert([ /*19*/ 
            'name' => "Ortografia",
        ]);
        DB::table('courses')->insert([ /*20*/ 
            'name' => "Productividad y Desarollo",
        ]);
    }
}
