<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('karyawan', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->string('nama', 255);
            $table->string('alamat', 255);
            $table->string('jabatan', 255);
        });

        $data_karyawan = [
            ['nama' => "Tantowi", 'alamat' => 'Tangerang', 'jabatan' => 'Android Dev'],
            ['nama' => "Putra", 'alamat' => 'Jakarta Barat', 'jabatan' => 'Web Dev'],
            ['nama' => "Agung", 'alamat' => 'Jakarta Pusat', 'jabatan' => 'AI Researcher'],
            ['nama' => "Setiawan", 'alamat' => 'Jawa Tengah', 'jabatan' => 'Gamer'],
        ];

        DB::connection('mysql')->table('karyawan')->insert($data_karyawan);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql')->dropIfExists('karyawan');
    }
}
