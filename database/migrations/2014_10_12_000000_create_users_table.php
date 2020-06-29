<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();
            $table->string('password')->index();
            $table->string('session_id')->nullable()->index();
            $table->boolean('is_admin')->default(0)->index();
            $table->rememberToken();
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->softDeletes();
        });

        Schema::create('persons', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->string('image')->nullable()->index();
            $table->string('first_name')->nullable()->index();
            $table->string('last_name')->nullable()->index();
            $table->integer('gender')->default(0)->index();
            $table->integer('blood_type')->default(0)->index();
            $table->integer('marital_status')->default(0)->index();
            $table->string('postal_code')->nullable()->index();
            $table->string('fax_number')->nullable()->index();
            $table->string('birth_place')->nullable()->index();
            $table->date('birth_date')->nullable()->index();
            $table->text('address')->nullable();
            $table->unsignedBigInteger('country_id')->nullable()->index();
            $table->text('about_me')->nullable();
            $table->primary("user_id");
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('persons');
    }
}
