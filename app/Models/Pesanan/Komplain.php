<?php

namespace App\Models\Pesanan;

use App\Models\Customer\Customer;
use App\Models\Pesanan\Pesanan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Komplain extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    protected $hidden = ['craeted_at', 'updated_at', 'deleted_at'];
    // function customer()
    // {
    //     return $this->belongsTo(Customer::class);
    // }
    function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }
    function komplain_details()
    {
        return $this->hasMany(KomplainDetail::class);
    }
}
