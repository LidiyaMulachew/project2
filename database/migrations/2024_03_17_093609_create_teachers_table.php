<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string("First_name");
            $table->string("Middle_name");
            $table->string("Last_name");
            $table->integer("Age");
            $table->string("Education_level");
            $table->string("Teaching");
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
