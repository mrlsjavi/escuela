<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    public function pensums(){
        return $this->hasMany(Pensum::class);
    }

    public function scores(){
        return $this->hasMany(Score::class);
    }
}
