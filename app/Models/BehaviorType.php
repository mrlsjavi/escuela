<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BehaviorType extends Model
{
    use HasFactory;


    public function behaviors(){
        return $this->hasMany(Behavior::class);
    }
}
