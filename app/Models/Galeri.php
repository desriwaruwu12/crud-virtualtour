<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = "galeri";


    protected $primaryKey = "id_foto";

    protected $fillable = [
        'url_foto','nama','jenis','id_destinasi','id_work','id_berita','user_id'
    ];

    public function works()
    {
        return $this->belongsTo('App\Models\Work');
    }
    public function destinasi()
    {
        return $this->belongsTo('App\Models\Destinasi');
    }
}