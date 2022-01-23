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
            $table->string('User_Umum')->nullable();
            $table->string('To_Do_Umum')->nullable();
            $table->string('Progress_Umum')->nullable();
            $table->string('Done_Umum')->nullable();
            $table->string('KomentarManager_Umum')->nullable();
            $table->string('KomentarAsistenManajer_Umum')->nullable();
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
