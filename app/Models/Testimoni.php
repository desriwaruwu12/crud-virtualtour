<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimoni extends Model
{
    use HasFactory;
    protected $table = 'testimonial';
    protected $fillable = [
        'nama',
        'deskripsi',
        'jenis',
        'url_foto',
    ];
    
}