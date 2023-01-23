<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\StudentFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class StudentTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_EmptyStudentList(){
        $this->json('get','api/alumnos')
            ->assertJsonStructure([
               
        ])->assertStatus(200);
    }

    public function test_StudentList(){
        // $user = Student::factory()->create();
         $alumnos = Student::factory()->count(3)->create();

         $response = $this->json('get','api/alumnos')
            ->assertStatus(200)
            ->assertJsonStructure([
               [    "id",
                    "nombre",
                    "codigo"
                ]
            ])
            ->assertJsonCount(3);

         $this->assertDatabaseCount('students', 3);
    }

    public function test_SaveStudent(){
        $student = [

             'name' => "javier",
             'code' => "-J123XYZ"
        ];


        $this->json('post', '/api/alumnos', $student)
            ->assertStatus(201)
            ->assertJsonStructure([
                'id',
                'name',
                'code',
            ]);

        $this->assertDatabaseHas('students', [
                'name' => 'javier',
                'code' => '-J123XYZ',
            ]);
    }



}
