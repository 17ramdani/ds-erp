<?php

namespace App\Models\Reward;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RewardPoint extends Model
{
    use HasFactory;
    protected $table = "voucher_points";
    protected $guarded = ['id'];

    public function merchant()
    {
        return $this->belongsTo(MerchantPoint::class, 'merchant_id');
    }
}
