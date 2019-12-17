<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_info', function (Blueprint $table) {
           $table->increments('id');
            $table->string('title');
            $table->integer('object')->dafault('1');
            $table->integer('status')->nullable();
            $table->string('qr_link')->nullable();
            $table->timestamps();
            $table->string('body')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('v_info');
    }
}
