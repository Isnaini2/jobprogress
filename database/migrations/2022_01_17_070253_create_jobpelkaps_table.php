<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobpelkapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobpelkaps', function (Blueprint $table) {
            $table->id();
            $table->string('User_Pelkap')->nullable();
            $table->string('To_Do_Pelkap')->nullable();
            $table->string('Progress_Pelkap')->nullable();
            $table->string('Done_Pelkap')->nullable();
            $table->string('KomentarManager_Pelkap')->nullable();
            $table->string('KomentarAsistenManajer_Pelkap')->nullable();
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
        Schema::dropIfExists('jobpelkaps');
    }
}
