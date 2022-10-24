<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            // $table->string('sekolah_id');
            // $table->foreignId('sekolah_id');
            // $table->foreignId('sekolah_id')->constrained('sekolah');
            $table->foreignId('sekolah_id')->constrained('sekolah')->cascadeOnDeelete()->cascadeOnDeelete();
            $table->timestamps();

            // $table->foreign('sekolah_id')->references('id')->on('sekolah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
