<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliTable extends Migration
{
    public function up()
    {
        Schema::create('poli', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('biaya');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('poli');
    }
}
