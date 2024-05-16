<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Converter\Time\BigNumberTimeConverter;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->bigIncrements('id_supplier');
            $table->string('nama_supplier', 150)->nullable(false);
            $table->text('alamat')->nullable(false);
            $table->string('no_hp', 15)->nullable(false);
            $table->unsignedBigInteger('id_barang')->nullable(false);
            $table->foreign('id_barang')->references('id_barang')->on('barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier');
    }
};
