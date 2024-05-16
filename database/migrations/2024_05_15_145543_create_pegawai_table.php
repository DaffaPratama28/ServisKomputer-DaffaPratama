<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->bigIncrements('id_pegawai');
            $table->string('nama_pegawai', 150)->nullable(false);
            $table->text('alamat')->nullable(false);
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable(false);
            $table->enum('jabatan', ['teknisi', 'admin', 'spg'])->nullable(false);
            $table->enum('status', ['aktif', 'tidak_aktif'])->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
