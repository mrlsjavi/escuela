<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cycle;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Pensum;
use App\Models\Absen;
use App\Models\Asignment;
use App\Models\Score;
use App\Models\Report;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\AsignmentResource;

class AsignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Asignaciones = Asignment::all();
        return response()->json(AsignmentResource::collection($Asignaciones), 200);


        /*
            Ingreso de notas por grado y clase 
            listado de grados y clases - asignado al maestro 

            en lugar del listado de materias seria el ilstado de alumnos con las 4 notas
            y las guardo igual (opcion de disable)

        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ciclos = ciclo::orderBy('id','Desc')->get();
        $grados = grado::all();
        $alumno = alumno::find($id);
//tengo que devolver varios
        return response()->json($student, 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pensum = Pensum::where('grade_id', $request->get('grado'))->get();
      
      // dd($cursos); 
      DB::transaction(function() use($request){
        $as = new Asignment;
          $as->cycle_id = $request->get('ciclo');
          $as->grade_id = $request->get('grado');
          $as->student_id = $request->get('alumno');
          $as->save();

          

          collect(Pensum::where('grade_id', $request->get('grado'))->get())->map(function($p) use($as){
            //dd($as->id);
            //dd($p);
            //return $p->curso_id;
                 $punteo = new Score;
                 $punteo->course_id = $p->course_id;
                 $punteo->asignment_id = $as->id;
                 $punteo->nota1 = 0;
                 $punteo->nota2 = 0;
                 $punteo->nota3 = 0;
                 $punteo->nota4 = 0;
                 $punteo->save();
          });

          //ausencias y reportes
          $aus = new Absen;
          $aus->asignment_id = $as->id;
          $aus->absense = 0;
          $aus->save();

          $reporte = new Report;
          $reporte->asignment_id = $as->id;
          $reporte->reports = 0;
          $reporte->save();

          /*$con = new Behavior;
          $con->formativa_id = 1;
          $con->asignacion_id = $as->id;
          $con->calificacion = "Excelente";
          $con->save();

          $con = new Behavior;
          $con->formativa_id = 2;
          $con->asignacion_id = $as->id;
          $con->calificacion = "Excelente";
          $con->save();

          $con = new Behavior;
          $con->formativa_id = 3;
          $con->asignacion_id = $as->id;
          $con->calificacion = "Excelente";
          $con->save();

          $con = new Behavior;
          $con->formativa_id = 4;
          $con->asignacion_id = $as->id;
          $con->calificacion = "Excelente";
          $con->save();

          $con = new Behavior;
          $con->formativa_id = 5;
          $con->asignacion_id = $as->id;
          $con->calificacion = "Excelente";
          $con->save();

          $con = new Behavior;
          $con->formativa_id = 6;
          $con->asignacion_id = $as->id;
          $con->calificacion = "Excelente";
          $con->save();*/


      });
        return response()->json("success", 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
