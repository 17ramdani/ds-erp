<?php

namespace App\Models\Pesanan;

use App\Models\customer\customer;
use App\Models\Pesanan\Pesanan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerExperience extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "customer_experiences";
    protected $primaryKey  = "id";
    protected $guarded = [];

    function customer()
    {
        return $this->belongsTo(customer::class, 'id');
    }
    function pesanan()
    {
        return $this->belongsTo(pesanan::class, 'id');
    }
}
