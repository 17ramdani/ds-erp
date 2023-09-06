<?php

namespace App\Models\pesanan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class status_pesanan extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "status_pesanan";
    protected $primaryKey  = "id";
    protected $guarded = [];
}
