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
        Schema::table('nos_escapes', function (Blueprint $table) {
          // Rename the column from `nos_escape_name` to `name`
        $table->renameColumn('nos_escape_name', 'name');

        // Add the new columns
        $table->text('description')->nullable();  // Add the `description` field
        $table->string('slug')->unique();         // Add the `slug` field
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nos_escapes', function (Blueprint $table) {
          // Rename `name` back to `nos_escape_name`
        $table->renameColumn('name', 'nos_escape_name');

        // Drop the added columns
        $table->dropColumn('description');
        $table->dropColumn('slug');
        });
    }
};
