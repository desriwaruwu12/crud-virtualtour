<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag_berita extends Model
{
    protected $table = "berita_tag";

    protected $primaryKey = "id_tagberita";

    protected $fillable = [
        'tag_id_tag','berita_id_berita'
    ];
}