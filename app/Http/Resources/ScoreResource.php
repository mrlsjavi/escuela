<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class ScoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'curso' => CourseResource::make($this->course)->name,
           // 'asignment' => AsignmentResource::make($this->asignment),
            'nota1' => $this->nota1,
            'nota2' => $this->nota2,
            'nota3' => $this->nota3,
            'nota4' => $this->nota4,
        ];
    }
}
