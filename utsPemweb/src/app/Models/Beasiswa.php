<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    protected $fillable = [
    'nama',
    'asal_sekolah',
    'jurusan',
    'jenjang',
    'jenis_beasiswa', // Tambahkan field ini
];

}
