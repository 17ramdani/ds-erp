<?php

namespace App\Models\Membership;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\customer\customer_category;
use App\Models\customer\customer;

class Membership extends Model
{
    protected $table = "membership";
    use HasFactory;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function category()
    {
        return $this->belongsTo(Customer_category::class, 'customer_category_id');
    }
}
