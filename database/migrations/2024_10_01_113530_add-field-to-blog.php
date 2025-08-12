<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Drop the column outside the Blueprint closure
        if (Schema::hasColumn('blog', 'category')) {
            Schema::table('blog', function (Blueprint $table) {
                $table->dropForeign(['category']); // Drop foreign first
                $table->dropColumn('category');
            });
        }

        Schema::table('blog', function (Blueprint $table) {
            if (Schema::hasColumn('blog', 'image')) {
                $table->unsignedBigInteger('category')->nullable()->after('image');
            } else {
                $table->unsignedBigInteger('category')->nullable();
            }

            $table->foreign('category')->references('id')->on('categories')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('blog', function (Blueprint $table) {
            $table->dropForeign(['category']);
            $table->dropColumn('category');
        });
    }
};
