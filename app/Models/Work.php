<?php

namespace App\Models;

use App\Http\Controllers\AuthController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table = "works";

    protected $primaryKey = "id_work";

    protected $fillable = [
        'url_foto',
        'deskripsi',
        'jenis',
        'user_id',
    ];

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
    
    public function galeri()
    {
        return $this->hasMany('App\Models\Galeri','id_work','id_work');
    }
}