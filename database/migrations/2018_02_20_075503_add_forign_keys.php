<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('country_id')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade');
        });

        Schema::table('countries', function (Blueprint $table) {
            $table->foreign('default_currency_id')
                ->references('id')
                ->on('currencies')
                ->onDelete('cascade');
        });

        Schema::table('sender_receiver_country', function (Blueprint $table) {
            $table->foreign('sender_country_id')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade');

            $table->foreign('receiver_country_id')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade');
        });

        Schema::table('sender_receiver_country_transfer_type', function (Blueprint $table) {
            $table->foreign('transfer_type_id')
                ->references('id')
                ->on('transfer_type')
                ->onDelete('cascade');

            $table->foreign('sender_receiver_country_id')
                ->references('id')
                ->on('sender_receiver_country')
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['country_id']);
        });

        Schema::table('countries', function (Blueprint $table) {
            $table->dropForeign(['default_currency_id']);
        });

        Schema::table('sender_receiver_country', function (Blueprint $table) {
            $table->dropForeign('sender_receiver_country_sender_country_id_foreign');
            $table->dropForeign('sender_receiver_country_receiver_country_id_foreign');
        });

        Schema::table('sender_receiver_country_transfer_type', function (Blueprint $table) {
            $table->dropForeign('sender_receiver_country_transfer_type_transfer_type_id_foreign');
            $table->dropForeign('sender_receiver_country_transfer_type_sender_receiver_country_i');
        });
    }
}
