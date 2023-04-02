<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use App\Http\Resources\ScoreResource;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $cursos = Score::where('asignment_id', $id)->get();
        //($cursos);
         return response()->json(ScoreResource::collection($cursos), 200);

         //return response()->json(StudentResource::collection($students)
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

         
          //dd($punteo_id);
         // dd($request);
//
        $i = 0;
        $ciclo = 0;
        $mensaje = "Notas Actualizadas";
        do{
            if($request[$i] != null){
                $punteo_actualizado = Score::find($request[$i]['id']);
                $punteo_actualizado->nota1 = $request[$i]['nota1'];
                $punteo_actualizado->nota2 = $request[$i]['nota2'];
                $punteo_actualizado->nota3 = $request[$i]['nota3'];
                $punteo_actualizado->nota4 = $request[$i]['nota4'];
                $i = $i +1;
                $punteo_actualizado->save();
            }
            else{
                $ciclo = 1;
            }
            
        }
        while($ciclo == 0);


        
        //return($j);
     /*   foreach ($request as $punteo){
           return($punteo[0]);
            
           // $punteo_actualizado->course_id = $request->get('curso');
           // $punteo_actualizado->asignment_id = $request->get('asignment_id');
            $punteo_actualizado->nota1 = $punteo->get('nota1');
            $punteo_actualizado->nota2 = $punteo->get('nota2');
            $punteo_actualizado->nota3 = $punteo->get('nota3');
            $punteo_actualizado->nota4 = $punteo->get('nota4');

            $punteo_actualizado->save();

        }*/
    
   // }

    return ($mensaje);
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
