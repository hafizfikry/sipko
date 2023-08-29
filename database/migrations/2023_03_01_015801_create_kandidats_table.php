<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kandidats', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('id_kandidat')->primary();

            $table->string('nama_ketos');
            $table->string('kelas_ketos');
            $table->string('nama_waketos');
            $table->string('kelas_waketos');
            $table->string('fotoprofil_ketos');
            $table->string('fotoprofil_waketos');
            $table->string('foto_kandidat');
            $table->text('visi');
            $table->text('misi');
            $table->integer('vote')->default(0);
            // $table->foreign('id_kandidat')->references('id')->on('kandidat');
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
        Schema::dropIfExists('kandidats');
        Schema::table('kandidats', function (Blueprint $table) {
            $table->dropColumn('vote');
        });
    }
}
