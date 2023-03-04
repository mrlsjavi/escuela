<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('behavior', function (Blueprint $table) {
            $table->id();
            $table->foreignId('behaviortypes_id')->constrained('behavior_types');
            $table->foreignId('asignment_id')->constrained('asignments');
            $table->foreignId('qualifications_id')->constrained('qualifications');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('behavior');
    }
};
