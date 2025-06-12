<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Beasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_beasiswa'
    ];

    public function penerimaBeasiswas()
    {
        return $this->hasMany(PenerimaBeasiswa::class);
    }
}
