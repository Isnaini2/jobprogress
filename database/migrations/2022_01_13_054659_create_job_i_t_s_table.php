<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobITSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_i_t_s', function (Blueprint $table) {
            $table->id();
            $table->string('User_IT')->nullable();
            $table->string('To_Do_IT')->nullable();
            $table->string('Progress_IT')->nullable();
            $table->string('Done_IT')->nullable();
            $table->string('KomentarManager_IT')->nullable();
            $table->string('KomentarAsistenManajer_IT')->nullable();
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
        Schema::dropIfExists('job_i_t_s');
    }
}
