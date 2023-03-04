<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;


    public function asignment(){
        return $this->BelongsTo(Asignment::class);
    }
}
