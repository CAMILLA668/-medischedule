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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();

            $table->foreign('speciality_id')
                ->constrained('specialities')
                ->onDelete('cascade');

            $table->string('name');
            $table->char('crm', 20)->unique();
            $table->char('phone', 11);
            $table->times('work_start_time');
            $table->times('work_end_time');
            $table->boolean('is_active')->default(true);
            $table->time('slot_duration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
