<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_visitors', function (Blueprint $table) {
            $table->increments('id');
            $table->text('ip_address')->nullable()->default(null);
            $table->text('browser_type')->nullable()->default(null);
            $table->string('language', 50)->nullable()->default(null);
            $table->boolean('isbot')->nullable()->default(null);
            $table->string('country', 50)->nullable()->default(null);
            $table->text('referring_url')->nullable()->default(null);
            $table->text('search_string')->nullable()->default(null);
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
        Schema::dropIfExists('log_visitors');
    }
}
