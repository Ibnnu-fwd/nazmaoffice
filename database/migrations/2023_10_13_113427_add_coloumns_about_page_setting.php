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
        Schema::table('about_page_setting', function (Blueprint $table) {
            $table->longText('slide_image_4');
            $table->longText('title_slide_image_1');
            $table->longText('description_slide_image_1');
            $table->longText('title_slide_image_2');
            $table->longText('description_slide_image_2');
            $table->longText('title_slide_image_3');
            $table->longText('description_slide_image_3');
            $table->longText('title_slide_image_4');
            $table->longText('description_slide_image_4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('about_page_setting', function (Blueprint $table) {
            $table->dropColumn('slide_image_4');
            $table->dropColumn('title_slide_image_1');
            $table->dropColumn('description_slide_image_1');
            $table->dropColumn('title_slide_image_2');
            $table->dropColumn('description_slide_image_2');
            $table->dropColumn('title_slide_image_3');
            $table->dropColumn('description_slide_image_3');
            $table->dropColumn('title_slide_image_4');
            $table->dropColumn('description_slide_image_4');
        });
    }
};
