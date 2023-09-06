<?php

namespace App\Models\Ticketing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TindakLanjut extends Model
{
    use HasFactory;
    protected $table = "complaint_tindak_lanjut";
    protected $guarded = [];

    public function tindak()
    {
        return $this->belongsTo(Ticketing::class, 'complaint_id');
    }
}
