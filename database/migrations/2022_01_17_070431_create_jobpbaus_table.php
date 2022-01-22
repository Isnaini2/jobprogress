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
            $table->string('User_Pbau');
            $table->string('To_Do_Pbau');
            $table->string('Progress_Pbau');
            $table->string('Done_Pbau');
            $table->string('KomentarManager_Pbau');
            $table->string('KomentarAsistenManajer_Pbau');
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
