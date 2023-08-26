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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->longText('thumbnail');
            $table->longText('hero_image');
            $table->string('phone');
            $table->string('study_case');
            $table->longText('study_case_description');
            $table->integer('capacity');
            $table->integer('status')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->date('event_date');
            $table->time('event_time');
            $table->integer('price')->nullable();
            $table->string('location');
            $table->integer('discount')->nullable();
            $table->boolean('is_active')->default(1);
            $table->string('event_type');
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
        Schema::dropIfExists('events');
    }
};
