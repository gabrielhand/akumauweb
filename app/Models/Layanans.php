<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanans extends Model
{
    use HasFactory;

    public function kategori(){
        return $this->belongsTo(Kategoris::class,'kategori_id');
    }
}
