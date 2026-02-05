<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coverage_requirements', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('day_of_week');
            $table->tinyInteger('min_staff_required');
            $table->enum('shift_type', ['lunch', 'dinner', 'both']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coverage_requirements');
    }
};
