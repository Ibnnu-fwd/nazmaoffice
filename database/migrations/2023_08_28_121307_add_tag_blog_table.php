<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->text('tag')->after('content')->nullable()->comment('tag for blog post');
            $table->text('meta_description')->after('tag')->nullable()->comment('meta description for blog post');
            $table->text('meta_keyword')->after('meta_description')->nullable()->comment('meta keyword for blog post');
            $table->text('slug')->after('meta_keyword')->nullable()->comment('slug for blog post');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            // drop columns
            $table->dropColumn('tag');
            $table->dropColumn('meta_description');
            $table->dropColumn('meta_keyword');
            $table->dropColumn('slug');
        });
    }
};
