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
        Schema::create('home_event_sections', function (Blueprint $table) {
            $table->id();
            $table->string('heading');         // For the heading
            $table->string('subheading');      // For the subheading
            $table->text('paragraph');        // For the paragraph
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_event_sections');
    }
};
