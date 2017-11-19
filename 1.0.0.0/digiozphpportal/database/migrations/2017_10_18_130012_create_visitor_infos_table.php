<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitor_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip_address', 25);
            $table->text('page_url');
            $table->text('referring_url');
            $table->string('browser_name', 100);
            $table->string('browser_type', 100);
            $table->text('browser_user_agent');
            $table->string('browser_version', 20);
            $table->boolean('iscrawler');
            $table->text('js_version');
            $table->string('operating_system', 20);
            $table->text('keywords');
            $table->string('search_engine', 20);
            $table->string('country', 50);
            $table->string('language', 100);
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
        Schema::dropIfExists('visitor_infos');
    }
}
