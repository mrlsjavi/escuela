<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AsignmentResource extends JsonResource
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
            'ciclo' => CycleResource::make($this->cycle)->name,
            'grado' => GradeResource::make($this->grade)->name,
            'student' => StudentResource::make($this->student)->name,
        ];
    }
}
