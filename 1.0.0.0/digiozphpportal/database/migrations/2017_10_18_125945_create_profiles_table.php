<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
            $table->string('first_name', 50)->nullable()->default(null);
            $table->string('middle_name', 50)->nullable()->default(null);
            $table->string('last_name', 50)->nullable()->default(null);
            $table->dateTime('birthday')->nullable()->default(null);
            $table->boolean('birthday_visible')->nullable()->default(null);
            $table->string('address', 70)->nullable()->default(null);
            $table->string('address2', 70)->nullable()->default(null);
            $table->string('city', 40)->nullable()->default(null);
            $table->string('state', 40)->nullable()->default(null);
            $table->string('zip', 30)->nullable()->default(null);
            $table->string('country', 50)->nullable()->default(null);
            $table->text('signature')->nullable()->default(null);
            $table->text('avatar')->nullable()->default(null);
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
        Schema::dropIfExists('profiles');
    }
}
