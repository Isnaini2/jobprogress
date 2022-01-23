<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobkeuangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobkeuangans', function (Blueprint $table) {
            $table->id();
            $table->string('User_Keuangan')->nullable();
            $table->string('To_Do_Keuangan')->nullable();
            $table->string('Progress_Keuangan')->nullable();
            $table->string('Done_Keuangan')->nullable();
            $table->string('KomentarManager_Keuangan')->nullable();
            $table->string('KomentarAsistenManajer_Keuangan')->nullable();
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
        Schema::dropIfExists('jobkeuangans');
    }
}
