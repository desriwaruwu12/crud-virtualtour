<?php

namespace App\Models;

use App\Http\Controllers\AuthController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Invoice extends Model
{
    protected $table = "invoice_virtual_tour";

    protected $primaryKey = "number";

    protected $fillable = [
        'customer_id',
        'created_at',
        'updated_at',

    ];

    public function user()
    {
        return $this->BelongsTo(User::class);
    }

    public function Pemesanan()
    {
        return $this->belongsTo ( related: Pemesanan::class, foreignKey: 'pemesanan_virtual_tour_id');
    }

    public static function boot()
    {
        parent::boot();

        static::craeting(function($model){
            $model->number = Invoice::where('pemesanan_virtual_tour_id', $model->pemesanan_virtual_tour_id)->max('number')+1;
        });
    }

}