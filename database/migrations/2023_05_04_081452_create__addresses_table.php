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
        Schema::create('_addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('Building_no');
            $table->integer('Flat_no');
            $table->string('Area');
            $table->string('City');
            $table->string('Country');
            $table->unsignedBigInteger('guardian_id');
            $table->foreign('guardian_id')
                    ->references('id')        
                    ->on('_guardians')
                    ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_addresses');
    }
};
