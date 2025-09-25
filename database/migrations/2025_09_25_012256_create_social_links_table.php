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
        Schema::create('social_links', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('team_id'); // Foreign key

            $table->string('icon');
            $table->text('url');
            $table->text('tooltip')->nullable();
            $table->string('name');
            $table->boolean('status')->default(1);

            $table->timestamps();

            /// Foreign key constraint 
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_links');
    }
};
