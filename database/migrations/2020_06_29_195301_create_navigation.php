<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavigation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navigations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('parent_id')->nullable()->index();
            $table->string('slug')->unique();
            $table->string('prefix')->nullable()->index();
            $table->string('name')->nullable()->index();
            $table->string('route')->nullable()->index();
            $table->string('icon')->nullable()->index();
            $table->string('url')->nullable()->index();
            $table->integer('group')->default(0)->index();
            $table->integer('type')->default(0)->index();
            $table->integer('status')->default(0)->index();
            $table->integer('sort')->default(0)->index();
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
        Schema::dropIfExists('navigations');
    }
}
