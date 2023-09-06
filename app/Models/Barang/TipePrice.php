<?php

namespace App\Models\barang;

use App\Models\customer\customer_category;
use App\Models\kain\tipe_kain;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipePrice extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "tipe_kain_prices";
    protected $primary_key = "id";
    protected $fillable = [
        'tipe_kain_id',
        'customer_category_id',
        'periode',
        'tipe',
        'harga',
    ];
    public function tipeKain()
    {
        return $this->belongsTo(tipe_kain::class, 'tipe_kain_id','id');
    }

    public function customerCategory()
    {
        return $this->belongsTo(customer_category::class, 'customer_category_id','id');
    }
}
