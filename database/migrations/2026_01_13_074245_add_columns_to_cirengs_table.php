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
        Schema::table('cirengs', function (Blueprint $table) {
            $table->string('nama_menu');
            $table->integer('harga');
            $table->integer('stok');
            $table->string('kategori');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cirengs', function (Blueprint $table) {
            $table->dropColumn(['nama_menu', 'harga', 'stok', 'kategori']);
        });
    }
};
