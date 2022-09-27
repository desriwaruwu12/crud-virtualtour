<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offline extends Model
{
    use HasFactory;
    
    protected $table = "tour_offline";
    
    protected $primaryKey = "tour_offline_id";

    protected $fillable = [
        'nama_paket',
        'deskripsi',
        'harga',
        'jenis_paket',
        'url_gambar',
        'jumlah_minimum'
    ];
}
