<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();

            // Our Story
            $table->string('story_image')->nullable();
            $table->text('story_description')->nullable();

            // Stats (4 fixed items)
            $table->string('stat1_icon')->nullable();
            $table->string('stat1_number')->nullable();
            $table->string('stat1_label')->nullable();

            $table->string('stat2_icon')->nullable();
            $table->string('stat2_number')->nullable();
            $table->string('stat2_label')->nullable();

            $table->string('stat3_icon')->nullable();
            $table->string('stat3_number')->nullable();
            $table->string('stat3_label')->nullable();

            $table->string('stat4_icon')->nullable();
            $table->string('stat4_number')->nullable();
            $table->string('stat4_label')->nullable();

            // Mission / Vision
            $table->text('mission_description')->nullable();
            $table->text('vision_description')->nullable();

            // Journey (4 fixed items)
            $table->string('journey1_icon')->nullable();
            $table->text('journey1_description')->nullable();

            $table->string('journey2_icon')->nullable();
            $table->text('journey2_description')->nullable();

            $table->string('journey3_icon')->nullable();
            $table->text('journey3_description')->nullable();

            $table->string('journey4_icon')->nullable();
            $table->text('journey4_description')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
