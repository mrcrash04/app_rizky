<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tiket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('tiket', function (Blueprint $table) {
       $table->id_tiket();
       $table->string('no_tiket');
       $table->string('nama');
       $table->text('alamat');
       $table->text('no_hp');
       $table->integer('status');
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
        //
    }
}
