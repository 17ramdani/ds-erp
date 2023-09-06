<?php

namespace App\Models\customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class customer_service extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "customer_service";
    protected $primaryKey = "id";
    protected $guarded = [];
}
