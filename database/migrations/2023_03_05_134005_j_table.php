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
        Schema::create('j_tables', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('city');
            $table->date('Birth_date');
            $table->string('status');
            $table->date('Record_Date');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('j_tables');
    }
};
