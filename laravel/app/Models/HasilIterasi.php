<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilIterasi extends Model
{
    use HasFactory;

    protected $table = 'hasil_iterasi';  

    protected $fillable = [
        'iterasi',
        'mahasiswa_id',
        'c1',
        'c2',
        'c3',
        'rata_rata'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
    
}
