<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelians extends Model
{
    use HasFactory;
    protected $guarded = [];

    // public function pembayarans()
    // {
    //     return $this->hasOne(Pembayarans::class, 'order_id', 'order_id');
    // }

    // public function dataJoki()
    // {
    //     return $this->hasOne(DataJoki::class, 'order_id', 'order_id');
    // }

    public function layanan()
    {
        return $this->belongsTo(Layanans::class, 'layanan', 'layanan');
    }
}
