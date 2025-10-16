<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawan';
    protected $primaryKey = 'nip';     // <- ini ganti primary key ke 'nip'
    public $incrementing = false;      // <- karena 'nip' bukan auto-increment
    protected $keyType = 'string';     // <- tipe data 'nip' biasanya string

    protected $fillable = [
        'nip',
        'nama_karyawan',
        'gaji_karyawan',
        'alamat',
        'jenis_kelamin',
    ];
}
