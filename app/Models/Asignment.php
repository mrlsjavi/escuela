<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignment extends Model
{
    use HasFactory;


    public function cycle(){
        return $this->BelongsTo(Cycle::class);
    }
    public function grade(){
        return $this->BelongsTo(Grade::class);
    }
    public function student(){
        return $this->BelongsTo(Students::class);
    }

    public function absen(){
        return $this->hasOne(Absen::class);
    }

    public function report(){
        return $this->hasOne(Report::class);
    }

    public function scores(){
        return $this->hasMany(Score::class);
    }

    public function behaviors(){
        return $this->hasMany(Behavior::class);
    }
}
