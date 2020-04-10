<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaiKriteriaAlternatifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_kriteria_alternatif', function (Blueprint $table) {
            $table->bigIncrements('id_nilai_kriteria_alternatif');
            $table->integer('kriteria');
            $table->string('keterangan');
            $table->integer('nilai');
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
        Schema::dropIfExists('nilai_kriteria_alternatif');
    }
}
