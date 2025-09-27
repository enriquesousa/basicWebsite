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
        Schema::create('member_details', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('team_id'); // Foreign key

            $table->text('description')->nullable();
            $table->string('image')->nullable();

            $table->text('facebook_url')->nullable();
            $table->boolean('facebook_status')->default(1);

            $table->text('x_url')->nullable();
            $table->boolean('x_status')->default(1);

            $table->text('instagram_url')->nullable();
            $table->boolean('instagram_status')->default(1);

            $table->text('linkedin_url')->nullable();
            $table->boolean('linkedin_status')->default(1);

            $table->text('whatsapp_url')->nullable();
            $table->boolean('whatsapp_status')->default(0);

            $table->text('web_url')->nullable();
            $table->boolean('web_status')->default(0);

            
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
        Schema::dropIfExists('member_details');
    }
};
