<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailingListSubscriberXrefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailing_list_subscriber_xref', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mailing_list_id')->unsigned();
			$table->foreign('mailing_list_id')->references('id')->on('mailing_lists');
            $table->integer('mailing_list_subscriber_id')->unsigned();
			$table->foreign('mailing_list_subscriber_id')->references('id')->on('mailing_list_subscribers');
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
        Schema::dropIfExists('mailing_list_subscriber_xref');
    }
}
