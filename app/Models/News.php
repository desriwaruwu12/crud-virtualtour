<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_berita',
        'judul_berita',
        'url_foto',
        'caption',
        'viewer_count',
        'id_foto',
        'id_user',
    ];
}
