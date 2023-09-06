<?php

namespace App\Models\Customer;

use App\Models\Pesanan\Pesanan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'customer';
    protected $primaryKey = "id";
    protected $fillable = [
        'customer_category_id',
        'nama',
        'wilayah_id',
        'pob',
        'dob',
        'agama',
        'jenis_kelamin',
        'no_ktp',
        'pekerjaan',
        'lama_berusaha',
        'omset',
        'nama_perusahaan',
        'alamat_perusahaan',
        'kota_perusahaan',
        'tlp_perusahaan',
        'email_perusahaan',
        'lama_perusahaan',
        'jenis_usaha',
        'omset_perusahaan',
        'kebutuhan_nominal',
        'referensi',
        'alamat',
        'kota',
        'no_tlp',
        'no_hp',
        'email',
        'npwp',
        'provinsi_id',
        'kota_id',
        'kecamatan_id',
        'desa_id'
    ];

    public function category()
    {
        return $this->belongsTo(customer_category::class, "customer_category_id", "id");
    }
    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'customer_id');
    }
}
