<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobumumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobumums', function (Blueprint $table) {
            $table->id();
            $table->string('User_Umum');
            $table->string('To_Do_Umum');
            $table->string('Progress_Umum');
            $table->string('Done_Umum');
            $table->string('KomentarManager_Umum');
            $table->string('KomentarAsistenManajer_Umum');
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
        Schema::dropIfExists('jobumums');
    }
}
