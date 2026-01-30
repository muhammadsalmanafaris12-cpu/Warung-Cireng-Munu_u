<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            // Change enum to include 'Diproses' status
            DB::statement("ALTER TABLE orders MODIFY COLUMN status ENUM('Selesai', 'Pending', 'Diproses', 'Dibatalkan') DEFAULT 'Pending'");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            // Revert back to original enum
            DB::statement("ALTER TABLE orders MODIFY COLUMN status ENUM('Selesai', 'Pending', 'Dibatalkan') DEFAULT 'Pending'");
        });
    }
};
