<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->unique();
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->integer('group')->default(0)->index();
            $table->integer('type')->default(0)->index();
            $table->integer('status')->default(0)->index();
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
        });

        Schema::create('content_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parent_id')->nullable()->index();
            $table->string('slug')->unique();
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
        });

        Schema::create('content_taxonomies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parent_id')->nullable()->index();
            $table->string('slug')->unique();
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
        });

        Schema::create('content_category_mapped', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('model_id');
            $table->string('model_type');
            $table->primary(["category_id", "model_id", "model_type"]);
            $table->engine = 'InnoDB';
        });

        Schema::create('content_taxonomy_mapped', function (Blueprint $table) {
            $table->unsignedBigInteger('taxonomy_id');
            $table->unsignedBigInteger('model_id');
            $table->string('model_type');
            $table->primary(["taxonomy_id", "model_id", "model_type"]);
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
        Schema::dropIfExists('content_types');
        Schema::dropIfExists('content_categories');
        Schema::dropIfExists('content_taxonomies');
        Schema::dropIfExists('content_category_mapped');
        Schema::dropIfExists('content_taxonomy_mapped');
    }
}
