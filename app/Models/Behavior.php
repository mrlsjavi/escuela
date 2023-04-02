<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Behavior extends Model
{
    use HasFactory;

    /*
          $table->foreignId('behaviortypes_id')->constrained('behavior_types');
            $table->foreignId('asignment_id')->constrained('asignments');
            $table->foreignId('qualifications_id')->constrained('qualifications');

    */

    public function behaviortype(){
        return $this->BelongsTo(BehaviorType::class);
    }

    public function asignment(){
        return $this->BelongsTo(Asignment::class);
    }

    public function qualification(){
        return $this->BelongsTo(Qualification::class);
    }

}
