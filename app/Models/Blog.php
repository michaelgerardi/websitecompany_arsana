<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'blog';
    protected $fillable = ['id','id_kategori','nama_blog','tanggal_blog','keterangan','status','gambar'];
    protected $dates =['deleted_at'];

    protected function kategori(){
        return $this->hasMany('App\Models\kategori');
    }
}
