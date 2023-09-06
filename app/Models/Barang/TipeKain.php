<?php

namespace App\Models\Barang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipeKain extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "tipe_kain";
    protected $primary_key = "id";
    protected $guarded = [];

    public static function generateKode()
    {
        $lastTipe = TipeKain::orderBy('kode', 'desc')->first();

        if (!$lastTipe) {
            return 'TK.1';
        }

        $lastNumber = intval(str_replace('TK.', '', $lastTipe->kode));
        $nextNumber = $lastNumber + 1;
        $nextKode = 'TK.' . $nextNumber;

        $maxKode = TipeKain::max('kode');
        $maxNumber = intval(str_replace('TK.', '', $maxKode));
        $interval = $maxNumber - $lastNumber;

        if ($interval > 1) {
            return $nextKode;
        } else {
            $nextNumber = $maxNumber + 1;
            return 'TK.' . $nextNumber;
        }
    }

    function lebar()
    {
        return $this->belongsTo(BarangLebar::class, 'barang_lebar_id', 'id');
    }
    function gramasi()
    {
        return $this->belongsTo(BarangGramasi::class, 'barang_gramasi_id', 'id');
    }
    function warna()
    {
        return $this->belongsTo(Warna::class, 'warna_id', 'id');
    }
    function satuan()
    {
        return $this->belongsTo(BarangSatuan::class, 'barang_satuan_id', 'id');
    }
    function jenis_kain()
    {
        return $this->belongsTo(JenisKain::class, 'jenis_kain_id', 'id');
    }
    function kategori_warna()
    {
        return $this->belongsTo(warna::class, 'kategori_warna_id', 'id');
    }
}
