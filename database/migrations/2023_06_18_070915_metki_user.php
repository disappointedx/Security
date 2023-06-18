<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('metki_user', function (Blueprint $table) {
           $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('metki_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('metki_id')->references('id')->on('metkis');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metki_user');
    }
};
