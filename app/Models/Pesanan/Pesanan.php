<?php

namespace App\Models\Pesanan;

// use App\Models\Customer\customer;
use App\Models\Customer\Customer as CustomerCustomer;
use App\Models\Penjualan\Salesman;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer\CustomerService;
use App\Models\Pesanan\CustomerExperience;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pesanan extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "pesanan";
    protected $primaryKey  = "id";
    protected $guarded = [];

    function status()
    {
        return $this->belongsTo(status_pesanan::class, 'status_pesanan_id', 'id');
    }
    function customer()
    {
        return $this->belongsTo(CustomerCustomer::class);
    }
    function details()
    {
        return $this->hasMany(DetailPesanan::class);
    }
    function salesna()
    {
        return $this->belongsTo(Salesman::class, 'sales_man_id', 'id');
    }
    function salesman()
    {
        return $this->belongsTo(Salesman::class, 'sales_man_id', 'id');
    }
    function exp()
    {
        return $this->belongsTo(CustomerExperience::class);
    }
    public function customer_service()
    {
        return $this->belongsTo(CustomerService::class);
    }

    function detail_accs()
    {
        return $this->hasMany(DetailPesanan::class);
    }
}
