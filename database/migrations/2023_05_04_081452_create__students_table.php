<?php

use App\Models\Guardian;
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
        Schema::create('_students', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->unsignedBigInteger('guardian_id');
            $table->char('Gender');
            $table->string('Standard');
            $table->string('Division');
            $table->timestamps();
            $table->foreign('guardian_id')
                ->references('id')
                ->on('_guardians')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_students');
    }
};
