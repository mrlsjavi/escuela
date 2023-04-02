<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([ /*1*/
            'name' => "Kinder",
        ]);
        DB::table('grades')->insert([ /*2*/
            'name' => "Pre Kinder",
        ]);
        DB::table('grades')->insert([ /*3*/
            'name' => "Adaptacion Escolar",
        ]);
        DB::table('grades')->insert([ /*4*/
            'name' => "Preparatoria",
        ]);
        DB::table('grades')->insert([ /*5*/
            'name' => "Primero",
        ]);
        DB::table('grades')->insert([ /*6*/
            'name' => "Segundo",
        ]);
        DB::table('grades')->insert([ /*7*/
            'name' => "Tercero",
        ]);
        DB::table('grades')->insert([ /*8*/
            'name' => "Cuarto",
        ]);
        DB::table('grades')->insert([ /*9*/
            'name' => "Quinto",
        ]);

    }
}
