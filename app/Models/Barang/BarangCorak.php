<?php

namespace App\Models\barang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BarangCorak extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "barang_corak";
    protected $primary_key = "id";
    protected $fillable = [
        'kode',
        'nama',
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

        return 'CRK.' . $lastNumber;
    }
}

