<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('css', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('css_1')->default(0);
            $table->integer('css_2')->default(0);
            $table->integer('css_3')->default(0);
            $table->integer('css_4')->default(0);
            $table->integer('css_5')->default(0);
            $table->integer('css_6')->default(0);
            $table->integer('css_7')->default(0);
            $table->integer('css_8')->default(0);
            $table->integer('css_9')->default(0);
            $table->integer('css_10')->default(0);
            $table->string('css_1_at')->nullable();
            $table->string('css_2_at')->nullable();
            $table->string('css_3_at')->nullable();
            $table->string('css_4_at')->nullable();
            $table->string('css_5_at')->nullable();
            $table->string('css_6_at')->nullable();
            $table->string('css_7_at')->nullable();
            $table->string('css_8_at')->nullable();
            $table->string('css_9_at')->nullable();
            $table->string('css_10_at')->nullable();
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
        Schema::dropIfExists('css');
    }
}
