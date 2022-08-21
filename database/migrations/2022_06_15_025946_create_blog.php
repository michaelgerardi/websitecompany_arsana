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
            $table->unsignedBigInteger('user_id');
            $table->string('id_kategori');
            $table->date('tanggal_blog');
            $table->text('keterangan');
            $table->string('gambar');
            $table->char('status',1);
            $table->integer('view')->default(0);
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('blog');
        // Schema::table('blog', function (Blueprint $table) {
        //     $table->dropSoftDeletes();
        // });
    }
};
