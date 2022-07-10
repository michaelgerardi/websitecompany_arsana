<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_blog');
            $table->string('id_kategori');
            $table->date('tanggal_blog');
            $table->string('keterangan');
            $table->string('gambar');
            $table->char('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog');
        // Schema::table('blog', function (Blueprint $table) {
        //     $table->dropSoftDeletes();
        // });
    }
};
