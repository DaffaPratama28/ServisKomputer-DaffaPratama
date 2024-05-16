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
        Schema::create('keluhan', function (Blueprint $table) {
            $table->bigIncrements('id_keluhan');
            $table->text('nama_keluhan')->nullable(false);
            $table->integer('ongkos')->nullable(false);
            $table->string('id_komputer')->nullable(false);
            $table->foreign('id_komputer')->references('id_komputer')->on('komputer');
            $table->unsignedBigInteger('customer_id')->nullable(false);
            $table->foreign('customer_id')->references('customer_id')->on('customers');
            $table->unsignedBigInteger('id_pegawai')->nullable(false);
            $table->foreign('id_pegawai')->references('id_pegawai')->on('pegawai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluhan');
    }
};
