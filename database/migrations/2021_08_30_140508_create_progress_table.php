<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('user_name');
            $table->integer('css')->default(0);
            $table->integer('js')->default(0);
            $table->integer('jquery')->default(0);
            $table->integer('php')->default(0);
            $table->integer('laravel')->default(0);
            $table->integer('copo_id')->nullable();
            $table->string('jquery_at')->nullable();
            $table->string('laravel_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progress');
    }
}
