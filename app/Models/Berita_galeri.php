<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita_galeri extends Model
{
    protected $table = "berita_galeri";

    protected $primaryKey = "id_beritagaleri";

    protected $fillable = [
        'galeri_id_galeri','berita_id_berita'
    ];
}