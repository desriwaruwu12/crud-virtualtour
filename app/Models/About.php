<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'about_us';
    protected $fillable = [
        'visi',
        'misi',
        'deskripsi',
        'no_contact',
        'alamat',
        'email',
        'ig_url',
        'twitter_url',
        'fb_url',
        'youtube_url',
        'users_id',
    ];

    public function keunggulan(){
        return $this->hasMany(Keunggulan::class);
    }

    public function user(){
        return $this->belongsTo(Keunggulan::class);
    }
    
}