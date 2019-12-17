<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_candidata', function (Blueprint $table) {
            $table->increments('id');
            $table->string('v_id');
            $table->string('c_id');
            $table->string('c_name');
            $table->integer('c_score')->default('0');
            $table->string('c_img');
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
        Schema::dropIfExists('v_candidata');
    }
}
