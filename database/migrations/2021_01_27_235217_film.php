<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Film extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
           $table->id();
           $table->unsignedBigInteger('user_id');
//           $table->unsignedBigInteger('rate_id');
           $table->string('title');
           $table->string('category')->default('all')->nullable();
           $table->string('body');
           $table->timestamps();
           $table->softDeletes();

           //Forgey keys
            $table->foreign('user_id')->references('id')->on('users');
//            $table->foreign('rate_id')->references('id')->on('rates')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
