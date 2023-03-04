<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;


    public function asignments(){
        return $this->hasMany(Asignment::class);
    }

    public function pensums(){
        return $this->hasMany(Pensum::class);
    }
}
