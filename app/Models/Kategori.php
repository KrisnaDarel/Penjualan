<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class kategori extends Model
{
    use HasFactory;

    protected $table='kategori';

    protected $guarded = [];

    public function Barang(){
        return $this->belongsToMany(Barang::class);
    }
}
