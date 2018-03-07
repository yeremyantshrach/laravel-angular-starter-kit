<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents',function (Blueprint $table){
           $table->increments('id');
           $table->jsonb('content');
           $table->integer('lang_id')->unsigned();
           $table->integer('page_id')->unsigned();

           $table->foreign('lang_id')
                ->references('id')
               ->on('languages')
               ->onDelete('cascade');

           $table->foreign('page_id')
                ->references('id')
               ->on('pages')
               ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
