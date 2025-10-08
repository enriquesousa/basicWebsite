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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable();
            $table->text('description_es')->nullable();
            $table->text('description_en')->nullable();

            $table->text('image')->nullable();
            $table->text('foto1')->nullable();
            $table->text('foto2')->nullable();

            $table->integer('category_id')->nullable();
            $table->string('client')->nullable();
            $table->string('services')->nullable();
            $table->text('website')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
