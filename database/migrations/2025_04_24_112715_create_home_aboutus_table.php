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
        Schema::create('home_aboutus', function (Blueprint $table) {
            $table->id();
            $table->string('main_heading');
            $table->string('sub_heading_1');
            $table->text('description_1');
            $table->string('sub_heading_2');
            $table->text('description_2');
            $table->string('sub_heading_3');
            $table->text('description_3');
            $table->string('sub_heading_4');
            $table->text('description_4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_aboutus');
    }
};
