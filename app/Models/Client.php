<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    // use HasFactory;

    //Mass Assignment
    protected $fillable = ['namaPribadi', 'email', 'alamat', 'ttl', 'namaPerusahaan', 'trayek', 'jmlhArmada', 'platKendaraan', 'merk', 'warna', 'bahanBakar'];

    protected $guarded = [];
}
