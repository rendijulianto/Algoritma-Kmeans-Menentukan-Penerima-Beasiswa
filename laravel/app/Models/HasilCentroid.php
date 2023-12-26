<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilCentroid extends Model
{
    use HasFactory;

    protected $table = 'hasil_centroid';

    protected $fillable = [
        'c1a',
        'c1b',
        'c1c',
        'c1d',
        'c1e',
        'c1f',
        'c2a',
        'c2b',
        'c2c',
        'c2d',
        'c2e',
        'c2f',
        'c3a',
        'c3b',
        'c3c',
        'c3d',
        'c3e',
        'c3f',
        'iterasi',
        'mahasiswa_id'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
    
}
