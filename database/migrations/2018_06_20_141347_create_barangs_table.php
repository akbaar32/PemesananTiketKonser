<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('barangs', function (Blueprint $table) {
      $table->increments('id');
      $table->string('id_tiket');
      $table->string('nama_pemesan');
      $table->string('kelas');
      $table->date('tgl');
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
    Schema::dropIfExists('barangs');
  }
}
