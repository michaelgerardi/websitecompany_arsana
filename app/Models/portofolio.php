<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portofolio extends Model
{
    use HasFactory;
    protected $table = 'portofolio';
    protected $fillable =['nama_perusahaan','tanggal_input','gambar'];
}
