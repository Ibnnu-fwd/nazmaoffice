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
        Schema::create('service_testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('image')->nullable();
            $table->string('job');
            $table->longText('description');
            $table->integer('rating');
            $table->unsignedBigInteger("service_id");
            $table->timestamps();

            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_testimonials');
    }
};
