<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PensumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
             Kinder - 1
             Pre Kinder - 2


        */


        //Kinder
        DB::table('pensums')->insert([
            'grade_id' => 1,
            'course_id' => 1,
            'orden' => 1,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 1,
            'course_id' => 2,
            'orden' => 2,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 1,
            'course_id' => 3,
            'orden' => 3,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 1,
            'course_id' => 4,
            'orden' => 4,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 1,
            'course_id' => 5,
            'orden' => 5,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 1,
            'course_id' => 6,
            'orden' => 6,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 1,
            'course_id' => 7,
            'orden' => 7,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 1,
            'course_id' => 8,
            'orden' => 8,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 1,
            'course_id' => 9,
            'orden' => 9,
        ]);

        // termina kinder

        //Pre Kinder
        DB::table('pensums')->insert([
            'grade_id' => 2,
            'course_id' => 1,
            'orden' => 1,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 2,
            'course_id' => 2,
            'orden' => 2,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 2,
            'course_id' => 3,
            'orden' => 3,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 2,
            'course_id' => 4,
            'orden' => 4,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 2,
            'course_id' => 5,
            'orden' => 5,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 2,
            'course_id' => 6,
            'orden' => 6,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 2,
            'course_id' => 7,
            'orden' => 7,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 2,
            'course_id' => 8,
            'orden' => 8,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 2,
            'course_id' => 9,
            'orden' => 9,
        ]);

        // termina Pre Kinder
        //Adaptacion Escolar
        DB::table('pensums')->insert([
            'grade_id' => 3,
            'course_id' => 1,
            'orden' => 1,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 3,
            'course_id' => 2,
            'orden' => 2,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 3,
            'course_id' => 3,
            'orden' => 3,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 3,
            'course_id' => 4,
            'orden' => 4,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 3,
            'course_id' => 5,
            'orden' => 5,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 3,
            'course_id' => 6,
            'orden' => 6,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 3,
            'course_id' => 7,
            'orden' => 7,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 3,
            'course_id' => 8,
            'orden' => 8,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 3,
            'course_id' => 9,
            'orden' => 9,
        ]);

        // termina Adaptacion Escolar
        // Preparatoria
        DB::table('pensums')->insert([
            'grade_id' => 4,
            'course_id' => 1,
            'orden' => 1,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 4,
            'course_id' => 2,
            'orden' => 2,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 4,
            'course_id' => 3,
            'orden' => 3,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 4,
            'course_id' => 4,
            'orden' => 4,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 4,
            'course_id' => 5,
            'orden' => 5,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 4,
            'course_id' => 6,
            'orden' => 6,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 4,
            'course_id' => 7,
            'orden' => 7,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 4,
            'course_id' => 8,
            'orden' => 8,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 4,
            'course_id' => 9,
            'orden' => 9,
        ]);

        // termina Preparatoria

        //primero
        DB::table('pensums')->insert([
            'grade_id' => 5,
            'course_id' => 10,
            'orden' => 1,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 5,
            'course_id' => 11,
            'orden' => 2,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 5,
            'course_id' => 12,
            'orden' => 3,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 5,
            'course_id' => 13,
            'orden' => 4,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 5,
            'course_id' => 14,
            'orden' => 5,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 5,
            'course_id' => 15,
            'orden' => 6,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 5,
            'course_id' => 5,
            'orden' => 7,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 5,
            'course_id' => 6,
            'orden' => 8,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 5,
            'course_id' => 16,
            'orden' => 9,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 5,
            'course_id' => 17,
            'orden' => 10,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 5,
            'course_id' => 18,
            'orden' => 11,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 5,
            'course_id' => 19,
            'orden' => 12,
        ]);
        // termina Primero

        //Segundo
        DB::table('pensums')->insert([
            'grade_id' => 6,
            'course_id' => 10,
            'orden' => 1,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 6,
            'course_id' => 11,
            'orden' => 2,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 6,
            'course_id' => 12,
            'orden' => 3,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 6,
            'course_id' => 13,
            'orden' => 4,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 6,
            'course_id' => 14,
            'orden' => 5,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 6,
            'course_id' => 15,
            'orden' => 6,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 6,
            'course_id' => 5,
            'orden' => 7,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 6,
            'course_id' => 6,
            'orden' => 8,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 6,
            'course_id' => 16,
            'orden' => 9,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 6,
            'course_id' => 17,
            'orden' => 10,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 6,
            'course_id' => 18,
            'orden' => 11,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 6,
            'course_id' => 19,
            'orden' => 12,
        ]);
        // termina Segundo
        //Tercero
        DB::table('pensums')->insert([
            'grade_id' => 7,
            'course_id' => 10,
            'orden' => 1,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 7,
            'course_id' => 11,
            'orden' => 2,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 7,
            'course_id' => 12,
            'orden' => 3,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 7,
            'course_id' => 13,
            'orden' => 4,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 7,
            'course_id' => 14,
            'orden' => 5,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 7,
            'course_id' => 15,
            'orden' => 6,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 7,
            'course_id' => 5,
            'orden' => 7,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 7,
            'course_id' => 6,
            'orden' => 8,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 7,
            'course_id' => 16,
            'orden' => 9,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 7,
            'course_id' => 17,
            'orden' => 10,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 7,
            'course_id' => 18,
            'orden' => 11,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 7,
            'course_id' => 19,
            'orden' => 12,
        ]);
        // termina Tercero
        
        //Cuarto
        DB::table('pensums')->insert([
            'grade_id' => 8,
            'course_id' => 10,
            'orden' => 1,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 8,
            'course_id' => 11,
            'orden' => 2,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 8,
            'course_id' => 12,
            'orden' => 3,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 8,
            'course_id' => 13,
            'orden' => 4,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 8,
            'course_id' => 14,
            'orden' => 5,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 8,
            'course_id' => 15,
            'orden' => 6,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 8,
            'course_id' => 5,
            'orden' => 7,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 8,
            'course_id' => 6,
            'orden' => 8,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 8,
            'course_id' => 17,
            'orden' => 9,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 8,
            'course_id' => 18,
            'orden' => 10,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 8,
            'course_id' => 19,
            'orden' => 11,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 8,
            'course_id' => 20,
            'orden' => 12,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 8,
            'course_id' => 16,
            'orden' => 13,
        ]);
        // termina Cuarto
        //Quinto
        DB::table('pensums')->insert([
            'grade_id' => 9,
            'course_id' => 10,
            'orden' => 1,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 9,
            'course_id' => 11,
            'orden' => 2,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 9,
            'course_id' => 12,
            'orden' => 3,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 9,
            'course_id' => 13,
            'orden' => 4,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 9,
            'course_id' => 14,
            'orden' => 5,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 9,
            'course_id' => 15,
            'orden' => 6,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 9,
            'course_id' => 5,
            'orden' => 7,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 9,
            'course_id' => 6,
            'orden' => 8,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 9,
            'course_id' => 17,
            'orden' => 9,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 9,
            'course_id' => 18,
            'orden' => 10,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 9,
            'course_id' => 19,
            'orden' => 11,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 9,
            'course_id' => 20,
            'orden' => 12,
        ]);
        DB::table('pensums')->insert([
            'grade_id' => 9,
            'course_id' => 16,
            'orden' => 13,
        ]);
        // termina Quinto
    }
}
