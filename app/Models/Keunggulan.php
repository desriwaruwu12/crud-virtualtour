<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keunggulan extends Model
{
    use HasFactory;
    protected $table = 'keunggulan';
    protected $fillable = [
        'keunggulan',
        'url_metafor',
        'about_us_id',
        'users_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function about(){
        return $this->belongsTo(User::class);
    }

}