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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nama_pemesan");
            $table->string("email_pemesan");
            $table->string("no_telp");
            $table->datetime("tanggal_acara");
            $table->text("catatan");
            $table->string("status");
            $table->foreignId("id_paket")->constrained("katalogs");
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
