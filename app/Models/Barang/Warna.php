<?php

namespace App\Models\Barang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warna extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "warna";
    protected $primary_key = "id";

    protected $fillable = [
        'parent_id',
        'kode',
        'nama',
        'keterangan'
    ];

    protected $hidden = [
        'created_at', 'updated_at', "created_by",
        "updated_by",
        "deleted_at"
    ];
public static function generateKode()
    {
        $lastKode = self::orderBy('id', 'desc')->pluck('kode')->first();

        if ($lastKode) {
            $lastNumber = intval(substr($lastKode, 4)) + 1;
        } else {
            $lastNumber = 1;
        }

        return 'WRN.' . $lastNumber;
    }
}
