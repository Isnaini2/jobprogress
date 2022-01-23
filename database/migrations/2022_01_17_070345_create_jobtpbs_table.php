<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobtpbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobtpbs', function (Blueprint $table) {
            $table->id();
            $table->string('User_Tpb')->nullable();
            $table->string('To_Do_Tpb')->nullable();
            $table->string('Progress_Tpb')->nullable();
            $table->string('Done_Tpb')->nullable();
            $table->string('KomentarManager_Tpb')->nullable();
            $table->string('KomentarAsistenManajer_Tpb')->nullable();
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
        Schema::dropIfExists('jobtpbs');
    }
}
