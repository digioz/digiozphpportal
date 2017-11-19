<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailingListCampaignRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailing_list_campaign_relations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mailing_list_id')->unsigned();
            $table->foreign('mailing_list_id')->references('id')->on('mailing_lists');
            $table->integer('mailing_list_campaign_id')->unsigned();
            $table->foreign('mailing_list_campaign_id')->references('id')->on('mailing_list_campaigns');
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
        Schema::dropIfExists('mailing_list_campaign_relations');
    }
}
