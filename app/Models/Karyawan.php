<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawan';
    protected $fillable = [
        'nip',
        'nama karyawan',
        'gaji karyawan',
        'alamat',
        'jenis kelamin',
        'departemen_id'
    ];
}
