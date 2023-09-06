<?php

namespace App\Models\Pesanan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PesananDevAcc extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "pesanan_dev_accs";
    protected $primaryKey = "id";
    protected $guarded = [];

    function pesana_dev()
    {
        return $this->belongsTo(PesananDev::class);
    }
}
