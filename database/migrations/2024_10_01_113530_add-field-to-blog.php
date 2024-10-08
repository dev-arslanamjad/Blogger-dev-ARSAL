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
        Schema::table('blog', function (Blueprint $table) {
            // Drop the existing 'category' column if it exists
            if (Schema::hasColumn('blog', 'category')) {
                $table->dropColumn('category');
            }
            
            // Add the category column as an unsignedBigInteger
            $table->unsignedBigInteger('category')->nullable()->after('image');

            // Add the foreign key constraint
            $table->foreign('category')->references('id')->on('categories')->onDelete('set null'); // Change to 'cascade' if you want to delete blogs when category is deleted
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blog', function (Blueprint $table) {
            // Drop the foreign key first
            $table->dropForeign(['category']);
            // Drop the 'category' column
            $table->dropColumn('category');
        });
    }
};
