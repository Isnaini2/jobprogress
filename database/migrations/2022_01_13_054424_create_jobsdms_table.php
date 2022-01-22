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
            $table->string('User_sdm');
            $table->string('To_Do_sdm');
            $table->string('Progress_sdm');
            $table->string('Done_sdm');
            $table->string('KomentarManager_sdm');
            $table->string('KomentarAsistenManajer_sdm');
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
