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
        Schema::create('peran', function (Blueprint $table) {
            $table->id();  
            $table->unsignedBigInteger('film_id');  
            $table->unsignedBigInteger('cast_id');  
            $table->string('nama', 45);  
            $table->foreign('film_id')->references('id')->on('film')->onDelete('cascade'); 
            $table->foreign('cast_id')->references('id')->on('cast')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peran');
    }
};
