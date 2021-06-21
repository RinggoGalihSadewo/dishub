<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namaPribadi');
            $table->string('alamat');
            $table->string('ttl');
            $table->string('namaPerusahaan');
            $table->string('trayek');
            $table->string('jmlhArmada');
            $table->string('platKendaraan')->unique();
            $table->string('merk');
            $table->string('warna');
            $table->string('bahanBakar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
