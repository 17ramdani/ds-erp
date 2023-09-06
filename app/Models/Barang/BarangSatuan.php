<?php

namespace App\Models\Barang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BarangSatuan extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "barang_satuan";
    protected $primary_key = "id";
    protected $fillable = [
        'kode',
        'keterangan',
    ];
    protected $guarded = [];
    public static function generateKode()
    {
        $lastKode = self::orderBy('id', 'desc')->pluck('kode')->first();

        if ($lastKode) {
            $lastNumber = intval(substr($lastKode, 4)) + 1;
        } else {
            $lastNumber = 1;
        }

        return 'STN.' . $lastNumber;
    }
}
