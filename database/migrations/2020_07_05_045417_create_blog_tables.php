<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
        });

        Schema::create('blog_taxonomies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
        });

        Schema::create('blog_articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('img_thumbnail')->nullable()->index();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->longText('body');
            $table->boolean('is_publihsed')->default(0)->index();
            $table->dateTime('published_at')->nullable()->index();
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
        });

        Schema::create('blog_article_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('article_id');
            $table->unsignedBigInteger('category_id');
            $table->primary(["article_id", "category_id"]);
            $table->engine = 'InnoDB';
        });

        Schema::create('blog_article_taxonomies', function (Blueprint $table) {
            $table->unsignedBigInteger('article_id');
            $table->unsignedBigInteger('taxonomy_id');
            $table->primary(["article_id", "taxonomy_id"]);
            $table->engine = 'InnoDB';
        });

        Schema::create('blog_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->index();
            $table->unsignedBigInteger('article_id')->index();
            $table->unsignedBigInteger('parent_id')->nullable()->index();
            $table->longText('body');
            $table->boolean('is_banned')->default(0)->index();
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("blog_categories");
        Schema::drop("blog_taxonomies");
        Schema::drop("blog_articles");
        Schema::drop("blog_article_categories");
        Schema::drop("blog_article_taxonomies");
        Schema::drop("blog_comments");
    }
}
