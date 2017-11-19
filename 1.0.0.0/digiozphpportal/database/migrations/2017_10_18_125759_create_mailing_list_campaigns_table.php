<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailingListCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailing_list_campaigns', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('subject');
            $table->string('from_name', 50);
            $table->string('from_email', 50);
            $table->text('summary');
            $table->text('banner');
            $table->text('body');
            $table->integer('visitor_count');
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
        Schema::dropIfExists('mailing_list_campaigns');
    }
}
