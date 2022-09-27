<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headline extends Model
{
    use HasFactory;
    protected $fillable = [
        'url_foto',
        'url_get',
        'judul',
        'caption',
        'urutan',
    ]; 
}