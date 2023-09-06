<?php

namespace App\Models\barang;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class barang_bagian extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "barang_bagian";
    protected $guarded = [];
}
