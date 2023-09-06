<?php

namespace App\Models\Pesanan;

use App\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PesananDev extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "pesanan_devs";
    protected $primaryKey = "id";
    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    function details()
    {
        return $this->hasMany(PesananDevDetail::class);
    }
    function accs()
    {
        return $this->hasMany(PesananDevAcc::class, 'pesanan_dev_id', 'id');
    }
}
