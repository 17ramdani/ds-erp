<?php

namespace App\Models\Ticketing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\customer\customer;
use App\Models\customer\customer_category;
use App\Models\Ticketing\TindakLanjut;

class Ticketing extends Model
{
    use HasFactory;
    protected $table = "customer_complaint";
    protected $guarded = ['id'];

    public function nama_customer()
    {
        return $this->belongsTo(customer::class, 'customer_id');
    }

    public function category()
    {
        return $this->belongsTo(customer_category::class, 'customer_category_id');
    }

    public function tindakl()
    {
        return $this->hasMany(TindakLanjut::class, 'id');
    }
}
