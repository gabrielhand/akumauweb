<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelians extends Model
{
    use HasFactory;

    public function layanan()
    {
        return $this->belongsTo(Layanans::class, 'layanan', 'layanan');
    }
}
