<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitrasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mitras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('nama_organisasi');
            $table->string('alamat_organisasi');
            $table->string('telepon_organisasi');
            $table->string('email_organisasi')->unique();
            $table->string('website_organisasi')->nullable();
            $table->string('nama_kontak_person');
            $table->string('jabatan_kontak_person');
            $table->string('telepon_kontak_person');
            $table->string('email_kontak_person');
            $table->string('dokumen_legalitas'); // Menyimpan nama file dokumen legalitas
            $table->string('proposal_program');
            $table->string('laporan_keuangan');
            $table->string('status')->default('pending'); // status bisa 'pending', 'approved', 'rejected'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mitras');
    }
}
