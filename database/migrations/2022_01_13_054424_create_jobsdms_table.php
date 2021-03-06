<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsdmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobsdms', function (Blueprint $table) {
            $table->id();
            $table->string('User_sdm')->nullable();
            $table->string('To_Do_sdm')->nullable();
            $table->string('Progress_sdm')->nullable();
            $table->string('Done_sdm')->nullable();
            $table->string('KomentarManager_sdm')->nullable();
            $table->string('KomentarAsistenManajer_sdm')->nullable();
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
        Schema::dropIfExists('jobsdms');
    }
}
