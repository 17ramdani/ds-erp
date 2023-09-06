<?php

namespace App\Models\Kain;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class warna extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "warna";
    protected $primaryKey = "id";
    protected $guarded = [];
}
