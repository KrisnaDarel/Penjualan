<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\Suplier;

class Barang extends Model
{
    use HasFactory;

    protected $table='barang';

    protected $guarded = [];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function suplier(){
        return $this->belongsTo(Suplier::class);
    }
}

