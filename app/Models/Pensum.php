<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pensum extends Model
{
    use HasFactory;


    public function grade(){
        return $this->BelongsTo(Grade::class);
    }
    public function course(){
        return $this->BelongsTo(Course::class);
    }
}
