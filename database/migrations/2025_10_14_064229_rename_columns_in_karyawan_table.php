<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('karyawan', function (Blueprint $table) {
            $table->renameColumn('nama karyawan', 'nama_karyawan');
            $table->renameColumn('gaji karyawan', 'gaji_karyawan');
            $table->renameColumn('jenis kelamin', 'jenis_kelamin');
        });
    }

    public function down()
    {
        Schema::table('karyawan', function (Blueprint $table) {
            $table->renameColumn('nama_karyawan', 'nama karyawan');
            $table->renameColumn('gaji_karyawan', 'gaji karyawan');
            $table->renameColumn('jenis_kelamin', 'jenis kelamin');
        });
    }
};
