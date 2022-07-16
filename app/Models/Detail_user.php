<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'bidang',
        'pengalaman',
        'pdd_terakhir',
        'acc'
    ];
    protected $table="detail_user";
}
