<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class CustomerCategory extends Model
{
    use HasFactory;

    protected $table = "customer_category";
    protected $primaryKey = "id";

    public function tipePrices()
    {
        return $this->hasMany(TipePrice::class, 'customer_category_id');
    }
}
