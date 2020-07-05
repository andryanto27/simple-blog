<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable()->index();
            $table->string('email')->nullable()->index();
            $table->string('phone')->nullable()->index();
            $table->string('website')->nullable()->index();
            $table->text('address')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
        });

        Schema::create('portfolio_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
        });

        Schema::create('portfolio_works', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('img_thumbnail')->nullable()->index();
            $table->unsignedBigInteger('customer_id');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->text('location')->nullable();
            $table->date('date_begin')->nullable()->index();
            $table->date('date_end')->nullable()->index();
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
        });

        Schema::create('portfolio_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('work_id');
            $table->string('path');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

        Schema::create('portfolio_work_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('work_id');
            $table->unsignedBigInteger('category_id');
            $table->primary(["work_id", "category_id"]);
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
        Schema::dropIfExists('customers');
        Schema::dropIfExists('portfolio_categories');
        Schema::dropIfExists('portfolio_works');
        Schema::dropIfExists('portfolio_images');
        Schema::dropIfExists('portfolio_work_categories');
    }
}
