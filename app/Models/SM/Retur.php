<?php

namespace App\Models\SM;

use App\Models\Pesanan\Pesanan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Retur extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }

    function retur_details()
    {
        return $this->hasMany(ReturDetail::class);
    }
}
