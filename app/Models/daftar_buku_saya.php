<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_buku_saya extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function daftarBuku()
    {
        return $this->belongsTo(daftar_buku::class, 'daftar_buku_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }
}