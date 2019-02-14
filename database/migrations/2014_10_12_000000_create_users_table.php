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
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('email')->unique()->nullable();
            $table->enum('role', ['root'])->nullable();
            $table->text('status')->default('active');
            $table->text('password')->nullable();
            $table->text('image_url')->nullable();
            $table->boolean('collapsed_menu')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('user_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('username')->nullable();
            $table->text('street')->nullable();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->text('zip')->nullable();
            $table->text('phone')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('country_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('user_accounts');
        Schema::dropIfExists('users');
    }
}
