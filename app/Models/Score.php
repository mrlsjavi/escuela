<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;


    public function student(){
        return $this->BelongsTo(Students::class);
    }

    public function course(){
        return $this->BelongsTo(Course::class);
    }
    public function asignment(){
        return $this->BelongsTo(Asignment::class);
    }
}
