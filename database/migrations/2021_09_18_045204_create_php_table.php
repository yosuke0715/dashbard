<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('php', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('php_1')->default(0);
            $table->integer('php_2')->default(0);
            $table->integer('php_3')->default(0);
            $table->integer('php_4')->default(0);
            $table->integer('php_5')->default(0);
            $table->integer('php_6')->default(0);
            $table->integer('php_7')->default(0);
            $table->integer('php_8')->default(0);
            $table->integer('php_9')->default(0);
            $table->integer('php_10')->default(0);
            $table->string('php_1_at')->nullable();
            $table->string('php_2_at')->nullable();
            $table->string('php_3_at')->nullable();
            $table->string('php_4_at')->nullable();
            $table->string('php_5_at')->nullable();
            $table->string('php_6_at')->nullable();
            $table->string('php_7_at')->nullable();
            $table->string('php_8_at')->nullable();
            $table->string('php_9_at')->nullable();
            $table->string('php_10_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('php');
    }
}
