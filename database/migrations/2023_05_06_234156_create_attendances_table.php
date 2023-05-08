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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->date('attendance_date');
            $table->enum('morning_dropOff',['Yes','No']);
            $table->enum('morning_pickup',['Yes','No']);
            $table->enum('evening_pickup',['Yes','No']);
            $table->enum('evening_dropOff',['Yes','No']);
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')
                    ->references('id')
                    ->on('_students')
                    ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
