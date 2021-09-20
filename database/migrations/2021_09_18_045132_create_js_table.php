<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('js', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('js_1')->default(0);
            $table->integer('js_2')->default(0);
            $table->integer('js_3')->default(0);
            $table->integer('js_4')->default(0);
            $table->integer('js_5')->default(0);
            $table->integer('js_6')->default(0);
            $table->integer('js_7')->default(0);
            $table->integer('js_8')->default(0);
            $table->integer('js_9')->default(0);
            $table->integer('js_10')->default(0);
            $table->string('js_1_at')->nullable();
            $table->string('js_2_at')->nullable();
            $table->string('js_3_at')->nullable();
            $table->string('js_4_at')->nullable();
            $table->string('js_5_at')->nullable();
            $table->string('js_6_at')->nullable();
            $table->string('js_7_at')->nullable();
            $table->string('js_8_at')->nullable();
            $table->string('js_9_at')->nullable();
            $table->string('js_10_at')->nullable();
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
        Schema::dropIfExists('js');
    }
}
