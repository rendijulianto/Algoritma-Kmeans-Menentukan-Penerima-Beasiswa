<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswa = array();
        $mahasiswa[] = [
            'nama' => 'Abridah Hariani Nasution',
            'jurusan' => 'Pend. Matematika',	
            'pekerjaan_ayah' => 3,
            'pekerjaan_ibu' => 5,
            'penghasilan_ayah' => 7,
            'penghasilan_ibu' => 9,
            'jumlah_saudara' => 2,
            'kondisi_anak' => 0,
        ];

        $mahasiswa[] = [
            'nama' => 'Adlin Ashari',
            'jurusan' => 'Pend. Matematika',	
            'pekerjaan_ayah' => 3,
            'pekerjaan_ibu' => 5,
            'penghasilan_ayah' => 7,
            'penghasilan_ibu' => 9,
            'jumlah_saudara' => 1,
            'kondisi_anak' => 0,
        ];
        // Afifah 6,3,9,8,1,0
        $mahasiswa[] = [
            'nama' => 'Afifah',
            'jurusan' => 'Pend. Matematika',	
            'pekerjaan_ayah' => 6,
            'pekerjaan_ibu' => 3,
            'penghasilan_ayah' => 9,
            'penghasilan_ibu' => 8,
            'jumlah_saudara' => 1,
            'kondisi_anak' => 0,
        ];

        // Amelia 5,5,7,9,2,0
        $mahasiswa[] = [
            'nama' => 'Amelia',
            'jurusan' => 'Pend. Matematika',	
            'pekerjaan_ayah' => 5,
            'pekerjaan_ibu' => 5,
            'penghasilan_ayah' => 7,
            'penghasilan_ibu' => 9,
            'jumlah_saudara' => 2,
            'kondisi_anak' => 0,
        ];

        // Arief Hidayat Nasution 3,5,7,9,1,0
        $mahasiswa[] = [
            'nama' => 'Arief Hidayat Nasution',
            'jurusan' => 'Pend. Matematika',	
            'pekerjaan_ayah' => 3,
            'pekerjaan_ibu' => 5,
            'penghasilan_ayah' => 7,
            'penghasilan_ibu' => 9,
            'jumlah_saudara' => 1,
            'kondisi_anak' => 0,
        ];

        // Arina Rahmad An 1,5,5,9,2,0
        $mahasiswa[] = [
            'nama' => 'Arina Rahmad An',
            'jurusan' => 'Pend. Matematika',	
            'pekerjaan_ayah' => 1,
            'pekerjaan_ibu' => 5,
            'penghasilan_ayah' => 5,
            'penghasilan_ibu' => 9,
            'jumlah_saudara' => 2,
            'kondisi_anak' => 0,
        ];

        // Chantika DInda Putri 4,5,7,9,2,0
        $mahasiswa[] = [
            'nama' => 'Chantika DInda Putri',
            'jurusan' => 'Pend. Matematika',	
            'pekerjaan_ayah' => 4,
            'pekerjaan_ibu' => 5,
            'penghasilan_ayah' => 7,
            'penghasilan_ibu' => 9,
            'jumlah_saudara' => 2,
            'kondisi_anak' => 0,
        ];
//         8. EGRY
// LISYEND
// RI
// Pend.
// Mat
// 5
// 5
// 7
// 8
// 3
// 0
        $mahasiswa[] = [
            'nama' => 'Egry Lisyendri',
            'jurusan' => 'Pend. Matematika',	
            'pekerjaan_ayah' => 5,
            'pekerjaan_ibu' => 5,
            'penghasilan_ayah' => 7,
            'penghasilan_ibu' => 8,
            'jumlah_saudara' => 3,
            'kondisi_anak' => 0,
        ];


// 9. ELWIDA
// SARI
// Pend.
// Mat
// 4
// 4
// 8
// 9
// 1
// 0
        $mahasiswa[] = [
            'nama' => 'Elwida Sari',
            'jurusan' => 'Pend. Matematika',	
            'pekerjaan_ayah' => 4,
            'pekerjaan_ibu' => 4,
            'penghasilan_ayah' => 8,
            'penghasilan_ibu' => 9,
            'jumlah_saudara' => 1,
            'kondisi_anak' => 0,
        ];

// 10. FIKRI
// SYAHPU
// TRA
// Pend.
// Mat
// 5
// 2
// 7
// 8
// 2
// 0

        $mahasiswa[] = [
            'nama' => 'Fikri Syahputra',
            'jurusan' => 'Pend. Matematika',	
            'pekerjaan_ayah' => 5,
            'pekerjaan_ibu' => 2,
            'penghasilan_ayah' => 7,
            'penghasilan_ibu' => 8,
            'jumlah_saudara' => 2,
            'kondisi_anak' => 0,
        ];


// 11. FITRI
// KHAIRA
// NI
// Pend.
// Mat
// 7
// 3
// 9
// 8
// 1
// 0

        $mahasiswa[] = [
            'nama' => 'Fitri Khairani',
            'jurusan' => 'Pend. Matematika',	
            'pekerjaan_ayah' => 7,
            'pekerjaan_ibu' => 3,
            'penghasilan_ayah' => 9,
            'penghasilan_ibu' => 8,
            'jumlah_saudara' => 1,
            'kondisi_anak' => 0,
        ];


// 12. INDAH
// OCKTAVI A
// Pend.
// Mat
// 5
// 5
// 8
// 8
// 1
// 0

        $mahasiswa[] = [
            'nama' => 'Indah Ocktavia',
            'jurusan' => 'Pend. Matematika',	
            'pekerjaan_ayah' => 5,
            'pekerjaan_ibu' => 5,
            'penghasilan_ayah' => 8,
            'penghasilan_ibu' => 8,
            'jumlah_saudara' => 1,
            'kondisi_anak' => 0,
        ];

// 13. INDAH
// PERMAT
// A SARI
// Pend.
// Mat
// 4
// 4
// 8
// 8
// 2
// 0

        $mahasiswa[] = [
            'nama' => 'Indah Permata Sari',
            'jurusan' => 'Pend. Matematika',	
            'pekerjaan_ayah' => 4,
            'pekerjaan_ibu' => 4,
            'penghasilan_ayah' => 8,
            'penghasilan_ibu' => 8,
            'jumlah_saudara' => 2,
            'kondisi_anak' => 0,
        ];

// 14. IRLAN
// NABAWI
// SHB
// Pend.
// Mat
// 5
// 4
// 7
// 9
// 3
// 0

        $mahasiswa[] = [
            'nama' => 'Irlan Nabawi',
            'jurusan' => 'Pend. Matematika',	
            'pekerjaan_ayah' => 5,
            'pekerjaan_ibu' => 4,
            'penghasilan_ayah' => 7,
            'penghasilan_ibu' => 9,
            'jumlah_saudara' => 3,
            'kondisi_anak' => 0,
        ];


// 15. KHAIRU
// N
// NIKMAH
// Pend.
// Mat
// 4
// 5
// 6
// 9
// 2
// 0

        $mahasiswa[] = [
            'nama' => 'Khairun Nikmah',
            'jurusan' => 'Pend. Matematika',	
            'pekerjaan_ayah' => 4,
            'pekerjaan_ibu' => 5,
            'penghasilan_ayah' => 6,
            'penghasilan_ibu' => 9,
            'jumlah_saudara' => 2,
            'kondisi_anak' => 0,
        ];


// 16. MAULID
// ATUL
// Pend.
// Mat
// 1
// 5
// 4
// 9
// 1
// 0

        $mahasiswa[] = [
            'nama' => 'Maulidatul',
            'jurusan' => 'Pend. Matematika',	
            'pekerjaan_ayah' => 1,
            'pekerjaan_ibu' => 5,
            'penghasilan_ayah' => 4,
            'penghasilan_ibu' => 9,
            'jumlah_saudara' => 1,
            'kondisi_anak' => 0,
        ];

//         17. MAULIDI
// A
// SYAHMI
// Pend.
// Mat 8 3 9 9 1 1
        $mahasiswa[] = [
            'nama' => 'Maulidia Syahmi',
            'jurusan' => 'Pend. Matematika',	
            'pekerjaan_ayah' => 8,
            'pekerjaan_ibu' => 3,
            'penghasilan_ayah' => 9,
            'penghasilan_ibu' => 9,
            'jumlah_saudara' => 1,
            'kondisi_anak' => 1,
        ];



// 18. MEGA
// NUR
// HIDAYA
// H
// Pend.
// Mat 4 4 7 6 1 0
        $mahasiswa[] = [
            'nama' => 'Mega Nur Hidayah',
            'jurusan' => 'Pend. Matematika',	
            'pekerjaan_ayah' => 4,
            'pekerjaan_ibu' => 4,
            'penghasilan_ayah' => 7,
            'penghasilan_ibu' => 6,
            'jumlah_saudara' => 1,
            'kondisi_anak' => 0,
        ];
        

// 19. MEINA
// LISA
// Pend.
// Mat 2 4 6 9 1 0
        $mahasiswa[] = [
            'nama' => 'Meina Lisa',
            'jurusan' => 'Pend. Matematika',	
            'pekerjaan_ayah' => 2,
            'pekerjaan_ibu' => 4,
            'penghasilan_ayah' => 6,
            'penghasilan_ibu' => 9,
            'jumlah_saudara' => 1,
            'kondisi_anak' => 0,
        ];
        
        $mahasiswa[] = [
            'nama' => 'Muhammad Sulam Alhabid',
            'jurusan' => 'Pend. Matematika',	
            'pekerjaan_ayah' => 2,
            'pekerjaan_ibu' => 4,
            'penghasilan_ayah' => 6,
            'penghasilan_ibu' => 9,
            'jumlah_saudara' => 1,
            'kondisi_anak' => 0,
        ];

        $mahasiswa[] =[
            'nama' => 'Rendi Julianto',
            'jurusan' => 'Teknik Informatika',
            'pekerjaan_ayah' => 1,
            'pekerjaan_ibu' => 1,
            'penghasilan_ayah' => 2,
            'penghasilan_ibu' => 3,
            'jumlah_saudara' => 1,
            'kondisi_anak' => 0,
        ];

        Mahasiswa::insert($mahasiswa);
    }
}
