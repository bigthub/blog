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
            $table->string('usrename')->nullable();
            $table->string('name')->nullable();
            $table->string('bio',150)->nullable();
            $table->string('location')->nullable();
            $table->string('website')->nullable();
            $table->string('remote_url')->nullable();
            $table->text('keybase_proof')->nullable();
            $table->boolean('is_private')->nullable();
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
