<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCategoryToIntegerInBlogsTable extends Migration
{
    public function up()
    {
        Schema::table('blog', function (Blueprint $table) {
            // Change the 'category' column to an integer type
            $table->unsignedBigInteger('category')->change();
        });
    }

    public function down()
    {
        Schema::table('blog', function (Blueprint $table) {
            // Revert back to varchar(191) if needed
            $table->string('category', 191)->change();
        });
    }
}
