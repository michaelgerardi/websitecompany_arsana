<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $fillable = ['id_kategori','nama_blog','tanggal_blog','keterangan','status','gambar'];

    protected function kategori(){
        return $this->hasMany('App\Models\kategori');
    }
}