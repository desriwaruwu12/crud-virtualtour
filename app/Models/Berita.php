<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = "berita";

    protected $primaryKey = "id_berita";

    protected $fillable = [
        'judul_berita','isi_berita','caption','viewer_count','id_foto','id_user',
    ];

    public function Tag(){
        return $this->belongsToMany('App\Models\Tag','berita_tag','id_berita','id_tag');
    }

    public function Galeri(){
    	return $this->hasMany('App\Models\Galeri','id_berita','id_berita');
    }
}