<?php

namespace App\Models\Exp;

use App\Models\Pesanan\Pesanan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Delivery extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }
}
