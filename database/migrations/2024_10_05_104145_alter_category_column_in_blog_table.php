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
            // Change 'category' column to unsignedBigInteger
            $table->unsignedBigInteger('category')->nullable()->change();

            // Drop foreign key if it exists (in case you added it before)
            $table->dropForeign(['category']);

            // Add the foreign key constraint
            $table->foreign('category')->references('id')->on('categories')->onDelete('set null'); // Or 'cascade'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blog', function (Blueprint $table) {
            // Drop foreign key
            $table->dropForeign(['category']);

            // Change 'category' column back to string (if needed)
            $table->string('category')->nullable()->change();
        });
    }
};
