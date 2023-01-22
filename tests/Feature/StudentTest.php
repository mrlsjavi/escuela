<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\StudentFactory;
use Illuminate\Support\Facades\DB;

class StudentTest extends TestCase
{
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


}
