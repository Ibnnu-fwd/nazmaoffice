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
        Schema::create('company_landing_setting', function (Blueprint $table) {
            $table->id();
            $table->longText('slide_image_1');
            $table->longText('slide_image_2');
            $table->longText('slide_image_3');
            $table->longText('about_us');
            $table->string('office_phone');
            $table->string('personal_phone');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_landing_setting');
    }
};
