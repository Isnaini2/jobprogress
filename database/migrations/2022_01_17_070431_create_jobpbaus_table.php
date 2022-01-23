<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobpbausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobpbaus', function (Blueprint $table) {
            $table->id();
            $table->string('User_Pbau')->nullable();
            $table->string('To_Do_Pbau')->nullable();
            $table->string('Progress_Pbau')->nullable();
            $table->string('Done_Pbau')->nullable();
            $table->string('KomentarManager_Pbau')->nullable();
            $table->string('KomentarAsistenManajer_Pbau')->nullable();
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
        Schema::dropIfExists('jobpbaus');
    }
}
