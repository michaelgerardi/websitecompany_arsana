<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    use HasFactory;
    protected $table ='layanan';
    protected $fillabe = ['judul_layanan','deskripsi','jenis_layanan','gambar'];
}
