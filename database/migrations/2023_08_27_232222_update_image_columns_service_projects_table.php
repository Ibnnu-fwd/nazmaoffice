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
        Schema::table('service_projects', function (Blueprint $table) {
            $table->longText('image_1')->nullable()->change();
            $table->longText('image_2')->nullable()->change();
            $table->longText('image_3')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_projects', function (Blueprint $table) {
            $table->string('image_1')->nullable()->change();
            $table->string('image_2')->nullable()->change();
            $table->string('image_3')->nullable()->change();
        });
    }
};
