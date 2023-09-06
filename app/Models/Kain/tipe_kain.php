<?php

namespace App\Models\Kain;

use App\Models\Kain\warna;
use App\Models\Kain\jenis_kain;
use App\Models\barang\TipePrice;
use App\Models\barang\barang_lebar;
use App\Models\barang\barang_satuan;
use App\Models\barang\barang_gramasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tipe_kain extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "tipe_kain";
    protected $primary_key = "id";
    protected $fillable = [
        'kode',
        'jenis_kain_id',
        'nama',
        'barang_gramasi_id',
        'barang_lebar_id',
        'bagian',
        'kategori_warna_id',
        'warna_id',
        'set',
        'status',
        'barang_satuan_id',
        'harga_default',
        'harga_final',
        'harga_roll',
        'harga_ecer',
        'gambar',
        'gambar_2',
        'gambar_3',
        'spandex_id',
        'basic_id',
        'qty_roll',
        'deskripsi',
        'karakteristik',
        'panjang',

    ];
    public static function generateKode()
    {
        $lastTipe = tipe_kain::orderBy('id', 'desc')->first();

        if (!$lastTipe) {
            return 'TK.1';
        }

        $nextKode = 'TK.' . $lastTipe->id;

        return $nextKode;
    }

    public function tipePrices()
    {
        return $this->hasMany(TipePrice::class, 'tipe_kain_id');
    }

    function lebar()
    {
        return $this->belongsTo(barang_lebar::class, 'barang_lebar_id', 'id');
    }
    function gramasi()
    {
        return $this->belongsTo(barang_gramasi::class, 'barang_gramasi_id', 'id');
    }
    function warna()
    {
        return $this->belongsTo(warna::class, 'warna_id', 'id');
    }
    function kategori_warna()
    {
        return $this->belongsTo(warna::class, 'kategori_warna_id', 'id');
    }
    function satuan()
    {
        return $this->belongsTo(barang_satuan::class, 'barang_satuan_id', 'id');
    }
    function jenis()
    {
        return $this->belongsTo(jenis_kain::class, 'jenis_kain_id', 'id');
    }
    function basic()
    {
        return $this->belongsTo(tipe_kain::class, 'basic_id', 'id');
    }
    function spandex()
    {
        return $this->belongsTo(tipe_kain::class, 'spandex_id', 'id');
    }
    function tipe_kain_accessories()
    {
        return $this->hasMany(TipeKainAccessories::class);
    }
    function tipe_kain_prices()
    {
        return $this->hasMany(TipeKainPrice::class);
    }
}
