<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PenerimaBeasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'beasiswa_id',
        'nama_mahasiswa',
        'asal_sekolah',
        'jurusan',
        'tingkat',
        'tahun_terima',
    ];

    public function beasiswa()
    {
        return $this->belongsTo(Beasiswa::class);
    }
}
