<?php

namespace App\Models\Financing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\customer\customer;

class Financing extends Model
{
    protected $table = "financing";
    protected $guarded  = [];
    use HasFactory;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
