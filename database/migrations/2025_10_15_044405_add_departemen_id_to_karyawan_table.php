<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('karyawan', function (Blueprint $table) {
            if (!Schema::hasColumn('karyawan', 'departemen_id')) {
                $table->unsignedBigInteger('departemen_id')->after('jenis_kelamin');
                $table->foreign('departemen_id')->references('id')->on('departemen')->onDelete('cascade');
            }
        });
    }

    public function down()
    {
        Schema::table('karyawan', function (Blueprint $table) {
            if (Schema::hasColumn('karyawan', 'departemen_id')) {
                $table->dropForeign(['departemen_id']);
                $table->dropColumn('departemen_id');
            }
        });
    }
};
