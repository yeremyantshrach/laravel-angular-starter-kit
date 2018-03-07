<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSenderReceiverCountryTransferTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sender_receiver_country_transfer_type',function (Blueprint $table){
            $table->increments('id');
            $table->integer('transfer_type_id')->unsigned();
            $table->integer('sender_receiver_country_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sender_receiver_country_transfer_type');
    }
}
