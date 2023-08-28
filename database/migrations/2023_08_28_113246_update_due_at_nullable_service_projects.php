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
            $table->date('due_at')->nullable()->change();
            $table->date('taken_at')->nullable()->change();
            $table->string('customer_name')->nullable()->change();
            $table->string('customer_phone')->nullable()->change();
            $table->longText('image_1')->nullable()->change();
            $table->longText('image_2')->nullable()->change();
            $table->longText('image_3')->nullable()->change();
            $table->longText('description')->nullable()->after('image_3');
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
            $table->date('due_at')->nullable(false)->change();
            $table->date('taken_at')->nullable(false)->change();
            $table->string('customer_name')->nullable(false)->change();
            $table->string('customer_phone')->nullable(false)->change();
            $table->longText('image_1')->nullable(false)->change();
            $table->longText('image_2')->nullable(false)->change();
            $table->longText('image_3')->nullable(false)->change();
            $table->dropColumn('description');
        });
    }
};
