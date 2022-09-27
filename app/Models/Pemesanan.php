<?php

namespace App\Models;

use App\Http\Controllers\AuthController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = "pemesanan_virtual_tour";

    protected $primaryKey = "pemesanan_virtual_tour_id";

    protected $fillable = [
        'customer_id',
        'tanggal_pemesanan',
        'virtual_tour_id',
        'metode_pembayaran',

    ];

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
    public function Virtualtour()
    {
        return $this->belongsTo('App\Models\Virtualtour','pemesanan_virtual_tour_id','pemesanan_virtual_tour_id');
    }

}