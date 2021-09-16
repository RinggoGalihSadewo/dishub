<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    // use HasFactory;

    //Mass Assignment
    protected $fillable = ['namaPribadi', 'email', 'alamat', 'longtitude', 'lattitude', 'ttl', 'namaPerusahaan', 'trayek', 'jmlhArmada', 'platKendaraan', 'merk', 'warna', 'bahanBakar'];

    protected $guarded = [];

    public function perusahaan()
    {
        return $this->hasOne(Perusahaan::class);
    }

    public function map()
    {
        return $this->hasOne(Map::class);
    }
}
