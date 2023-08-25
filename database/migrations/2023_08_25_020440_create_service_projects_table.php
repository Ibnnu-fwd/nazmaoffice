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
        Schema::create('service_projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("service_id");
            $table->string('title');
            $table->date('taken_at');
            $table->date('due_at');
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('status');
            $table->string('price');
            $table->longText('image_1');
            $table->longText('image_2');
            $table->longText('image_3');
            $table->string('tag');
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
        Schema::dropIfExists('service_projects');
    }
};
