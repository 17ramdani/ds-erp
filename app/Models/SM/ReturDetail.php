<?php

namespace App\Models\SM;

use App\Models\pesanan\DetailPesanan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReturDetail extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    function retur()
    {
        return $this->belongsTo(Retur::class);
    }

    function detail_pesanan()
    {
        return $this->belongsTo(DetailPesanan::class);
    }
}
