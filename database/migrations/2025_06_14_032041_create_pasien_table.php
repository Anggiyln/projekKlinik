<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('no_pasien');
            $table->string('nama');
            $table->string('umur');
            $table->enum('jenis_kelamin', ['LAKI-LAKI', 'PEREMPUAN']);
            $table->string('alamat')->nullable();
            $table->timestamps('');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
