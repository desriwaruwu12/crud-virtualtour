<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Virtualtour extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $table= 'virtual_tour';
    protected $primaryKey= 'virtual_tour_id';
    protected $fillable = [
        'nama_paket',
        'harga',
        'deskripsi',
        'url_gambar'
    ];

}
