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
        Schema::create('three_features', function (Blueprint $table) {
            $table->id();

            $table->string('question_1')->nullable();
            $table->text('answer_1')->nullable();

            $table->string('question_2')->nullable();
            $table->text('answer_2')->nullable();

            $table->string('question_3')->nullable();
            $table->text('answer_3')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('three_features');
    }
};
