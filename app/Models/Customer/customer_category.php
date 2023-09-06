<?php

namespace App\Models\customer;

use App\Models\Membership\Membership;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class customer_category extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "customer_category";
    protected $primaryKey = "id";
    protected $guarded = [];

    function customer()
    {
        return $this->hasMany(customer::class);
    }
}
