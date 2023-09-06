<?php

namespace App\Models\Barang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Accessories extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "accessories";
    protected $primary_key = "id";
    protected $fillable = [
        'kode',
        'name',
        'type',
        'harga_roll',
        'harga_ecer',
        'maks',
    ];

    public static function generateKode()
    {
        $lastTipe = Accessories::orderBy('id', 'desc')->first();

        if (!$lastTipe) {
            return 'ACC.1';
        }

        $nextKode = 'ACC.' . $lastTipe->id + 1;

        return $nextKode;
    }
}
