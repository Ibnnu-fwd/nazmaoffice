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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("blog_category_id")->nullable();
            $table->longText("thumbnail")->nullable();
            $table->longText("main_image");
            $table->string("author_name");
            $table->longText("author_profile_picture")->nullable();
            $table->string("title");
            $table->date("published_date");
            $table->longText("content");
            $table->timestamps();

            // set null on delete
            $table->foreign("blog_category_id")->references("id")->on("blog_categories")->onDelete("set null");
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog');
    }
};
