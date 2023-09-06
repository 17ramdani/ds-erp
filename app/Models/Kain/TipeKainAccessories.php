<?php

namespace App\Models\Kain;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipeKainAccessories extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    function accessories()
    {
        return $this->belongsTo(Accessories::class);
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
