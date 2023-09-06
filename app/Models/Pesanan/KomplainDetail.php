<?php

namespace App\Models\Pesanan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomplainDetail extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at'];
    function detail()
    {
        return $this->belongsTo(DetailPesanan::class, 'detail_pesanan_id', 'id');
    }
}
