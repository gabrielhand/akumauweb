<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoris extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function layanans(){
        return $this->hasMany(Layanans::class,'kategori_id');
    }
    
    public function tipe()
    {
        return $this->belongsTo(Tipes::class);
    }
}
