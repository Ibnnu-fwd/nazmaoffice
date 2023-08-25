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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("service_category_id");
            $table->string('icon');
            $table->string('icon_color');
            $table->string('title');
            $table->longText('description');
            $table->string('phone');
            $table->longText('hero_image');
            $table->longText('benefit_image');
            $table->string('teaser_link')->nullable();
            $table->integer('is_active')->default(1);

            $table->foreign('service_category_id')->references('id')->on('service_categories')->onDelete('cascade');

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
        Schema::dropIfExists('services');
        Schema::dropIfExists('service_categories');
    }
};
