<?php

namespace App\Models\Kain;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class jenis_kain extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "jenis_kain";
    protected $primaryKey = "id";
    protected $guarded = [
        'kode',
        'nama',
        'gambar',
        'katalog',
        'keterangan',
    ];

    protected $dates = ['deleted_at'];

    public static function generateKode()
    {
        $lastKain = jenis_kain::orderBy('kode', 'desc')->first();

        if (!$lastKain) {
            return 'JK.1';
        }

        $lastNumber = intval(str_replace('JK.', '', $lastKain->kode));
        $nextNumber = $lastNumber + 1;
        $nextKode = 'JK.' . $nextNumber;

        return $nextKode;
    }
}
