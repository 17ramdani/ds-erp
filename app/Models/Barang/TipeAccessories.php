<?php

namespace App\Models\barang;

use App\Models\kain\tipe_kain;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TipeAccessories extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "tipe_kain_accessories";
    protected $primary_key = "id";
    protected $fillable = [
        'tipe_kain_id',
        'accessories_id',
        'paket',
        'status'
    ];

    public function tipeKain()
    {
        return $this->belongsTo(tipe_kain::class, 'tipe_kain_id','id');
    }

    public function asc()
    {
        return $this->belongsTo(Accessories::class, 'accessories_id','id');
    }
}
