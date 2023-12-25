<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'nama',
        'jurusan',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'penghasilan_ayah',
        'penghasilan_ibu',
        'jumlah_saudara',
        'kondisi_anak',
        'status_penerima_beasiswa'
    ];

    // append attribute
    protected $appends = [
        'pekerjaan_ayah_text',
        'pekerjaan_ibu_text',
        'penghasilan_ayah_text',
        'penghasilan_ibu_text',
        'jumlah_saudara_text',
        'kondisi_anak_text'
    ];

    // accessor

    public function getPekerjaanAyahTextAttribute()
    {
        if ($this->pekerjaan_ayah == 1) {
            return 'PNS/TNI/POLRI/BUMN';
        } elseif ($this->pekerjaan_ayah == 2) {
            return 'Pegawai Swasta';
        } elseif ($this->pekerjaan_ayah == 3) {
            return 'Wiraswasta';
        } elseif ($this->pekerjaan_ayah == 4) {
            return 'Petani/Nelayar/Supir';
        } elseif ($this->pekerjaan_ayah == 5) {
            return 'Tukang/Tidak-Tetap/Lain-lain';
        } elseif ($this->pekerjaan_ayah == 6) {
            return 'Pensiunan';
        } elseif ($this->pekerjaan_ayah == 7) {
            return 'Tidak Bekerja';
        } elseif ($this->pekerjaan_ayah == 8) {
            return 'Telah Meninggal Dunia';
        }
    }

    public function getPekerjaanIbuTextAttribute()
    {
        if ($this->pekerjaan_ibu == 1) {
            return 'PNS/TNI/POLRI/BUMN';
        } elseif ($this->pekerjaan_ibu == 2) {
            return 'Pegawai Swasta';
        } elseif ($this->pekerjaan_ibu == 3) {
            return 'Wiraswasta';
        } elseif ($this->pekerjaan_ibu == 4) {
            return 'Petani/Nelayar/Supir';
        } elseif ($this->pekerjaan_ibu == 5) {
            return 'Tukang/Tidak-Tetap/Lain-lain';
        } elseif ($this->pekerjaan_ibu == 6) {
            return 'Pensiunan';
        } elseif ($this->pekerjaan_ibu == 7) {
            return 'Tidak Bekerja';
        } elseif ($this->pekerjaan_ibu == 8) {
            return 'Telah Meninggal Dunia';
        }
    }

    public function getPenghasilanAyahTextAttribute()
    {
        if ($this->penghasilan_ayah == 1) {
            return 'Lebih dari 7.000.000';
        } elseif ($this->penghasilan_ayah == 2) {
            return 'Rp. 6.000.000 - Rp. 7.000.000';
        } elseif ($this->penghasilan_ayah == 3) {
            return 'Rp. 5.000.000 - Rp. 5.999.999';
        } elseif ($this->penghasilan_ayah == 4) {
            return 'Rp. 4.000.000 - Rp. 4.999.999';
        } elseif ($this->penghasilan_ayah == 5) {
            return 'Rp. 3.000.000 - Rp. 3.999.999';
        } elseif ($this->penghasilan_ayah == 6) {
            return 'Rp. 2.000.000 - Rp. 2.999.999';
        } elseif ($this->penghasilan_ayah == 7) {
            return 'Rp. 1.000.000 - Rp. 1.999.999';
        } elseif ($this->penghasilan_ayah == 8) {
            return 'Rp. 500.000 - Rp. 999.999';
        } else {
            return 'Tidak Berpenghasilan';
        }
    }

    public function getPenghasilanIbuTextAttribute()
    {
        if ($this->penghasilan_ibu == 1) {
            return 'Lebih dari 7.000.000';
        } elseif ($this->penghasilan_ibu == 2) {
            return 'Rp. 6.000.000 - Rp. 7.000.000';
        } elseif ($this->penghasilan_ibu == 3) {
            return 'Rp. 5.000.000 - Rp. 5.999.999';
        } elseif ($this->penghasilan_ibu == 4) {
            return 'Rp. 4.000.000 - Rp. 4.999.999';
        } elseif ($this->penghasilan_ibu == 5) {
            return 'Rp. 3.000.000 - Rp. 3.999.999';
        } elseif ($this->penghasilan_ibu == 6) {
            return 'Rp. 2.000.000 - Rp. 2.999.999';
        } elseif ($this->penghasilan_ibu == 7) {
            return 'Rp. 1.000.000 - Rp. 1.999.999';
        } elseif ($this->penghasilan_ibu == 8) {
            return 'Rp. 500.000 - Rp. 999.999';
        } else {
            return 'Tidak Berpenghasilan';
        }
    }

    public function getJumlahSaudaraTextAttribute()
    {
        if ($this->jumlah_saudara == 1) {
            return 'Kurang dari 3 orang';
        } elseif ($this->jumlah_saudara == 2) {
            return '3 - 5 orang';
        } elseif ($this->jumlah_saudara == 3) {
            return '6 - 7 orang';
        } elseif ($this->jumlah_saudara == 4) {
            return 'Lebih dari 7 orang';
        }
    }
    

    public function getKondisiAnakTextAttribute()
    {
        if ($this->kondisi_anak == 0) {
            return 'Tidak Yatim';
        } elseif ($this->kondisi_anak == 2) {
            return 'Yatim';
        } else {
            return 'Yatim Piatu';
        }
    }


    //hasil iterasi
    public function hasil_iterasi()
    {
        return $this->hasMany(HasilIterasi::class);
    }




}
