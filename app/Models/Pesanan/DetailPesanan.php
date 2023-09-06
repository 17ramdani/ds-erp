<?php

namespace App\Models\Pesanan;

use App\Models\Kain\tipe_kain;
use App\Models\barang\Warna;
use App\Models\Kain\TipeKainAccessories;
use App\Models\Kain\TipeKainPrice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailPesanan extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "detail_pesanan";
    protected $primaryKey  = "id";
    protected $guarded = [];

    function tipe_kain()
    {
        return $this->belongsTo(tipe_kain::class);
    }

    function warna_pesanan()
    {
        return $this->belongsTo(Warna::class, 'warna_id', 'id');
    }

    function tipe_kain_accessories()
    {
        return $this->belongsTo(TipeKainAccessories::class, 'tipe_kain_id', 'id');
    }
    function tipe_kain_price()
    {
        return $this->belongsTo(TipeKainPrice::class, 'tipe_kain_id', 'tipe_kain_id');
    }
    function tipe_kain_price_ecer()
    {
        return $this->belongsTo(TipeKainPrice::class, 'tipe_kain_id', 'tipe_kain_id');
    }
    function tipe_kain_price_roll()
    {
        return $this->belongsTo(TipeKainPrice::class, 'tipe_kain_id', 'tipe_kain_id');
    }
}
