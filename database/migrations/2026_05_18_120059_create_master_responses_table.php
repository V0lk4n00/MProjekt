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
        Schema::create('master_responses', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('row_1');
            $table->tinyInteger('row_2');
            $table->tinyInteger('row_3');
            $table->tinyInteger('row_4');
            $table->tinyInteger('row_5');
            $table->string('session_token')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_responses');
    }
};
