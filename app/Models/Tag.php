<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $table = "tag";

    public $primaryKey = "id_tag";

    protected $fillable = [
        'text_tag','user_id',
    ];

    public function Berita(){
        return $this->belongsToMany('App\Models\Berita','berita_tag','id_tag','id_berita');
    }
}