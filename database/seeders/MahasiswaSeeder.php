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
            'jurusan' => 'Teknik Informatika',	
            'pekerjaan_ayah' => 3,
            'pekerjaan_ibu' => 5,
            'penghasilan_ayah' => 7,
            'penghasilan_ibu' => 9,
            'jumlah_saudara' => 2,
            'kondisi_anak' => 0,
            'status_penerima_beasiswa' => 0,
            'klaster_beasiswa' => null,
            'jenjang_pendidikan' => 2,
            'ipk' => 4,
            'aktif_organisasi' => 0,
            'semester' => 4,
            'sedang_menerima_beasiswa' => 1,
            'domisili' => 0,
            'tunggakan' => 1,
        ];

        $mahasiswa[] = [
            'nama' => 'Adlin Ashari',
            'jurusan' => 'Teknik Informatika',	
            'pekerjaan_ayah' => 3,
            'pekerjaan_ibu' => 5,
            'penghasilan_ayah' => 7,
            'penghasilan_ibu' => 9,
            'jumlah_saudara' => 1,
            'kondisi_anak' => 0,
            'status_penerima_beasiswa' => 0,
            'klaster_beasiswa' => null,
            'jenjang_pendidikan' => 2,
            'ipk' => 4,
            'aktif_organisasi' => 1,
            'semester' => 3,
            'sedang_menerima_beasiswa' => 1,
            'domisili' => 0,
            'tunggakan' => 1,
        ];

        $mahasiswa[] =[
            'nama' => 'Fitri Saharani',
            'jurusan' => 'Teknik Informatika',
            'pekerjaan_ayah' => 3,
            'pekerjaan_ibu' => 3,
            'penghasilan_ayah' => 4,
            'penghasilan_ibu' => 5,
            'jumlah_saudara' => 2,
            'kondisi_anak' => 0,
            'status_penerima_beasiswa' => 0,
            'klaster_beasiswa' => '',
            'jenjang_pendidikan' => 2,
            'ipk' => 3,
            'aktif_organisasi' => 0,
            'semester' => 4,
            'sedang_menerima_beasiswa' => 1,
            'domisili' => 1,
            'tunggakan' => 1,
        ];

        $mahasiswa[] = [
            'nama' => 'Amelia',
            'jurusan' => 'Teknik Informatika',	
            'pekerjaan_ayah' => 5,
            'pekerjaan_ibu' => 5,
            'penghasilan_ayah' => 7,
            'penghasilan_ibu' => 9,
            'jumlah_saudara' => 2,
            'kondisi_anak' => 0,
            'status_penerima_beasiswa' => 0,
            'klaster_beasiswa' => null,
            'jenjang_pendidikan' => 1,
            'ipk' => 4,
            'aktif_organisasi' => 1,
            'semester' => 1,
            'sedang_menerima_beasiswa' => 0,
            'domisili' => 0,
            'tunggakan' => 0,
        ];
        
        $mahasiswa[] = [
            'nama' => 'Chantika DInda Putri',
            'jurusan' => 'Teknik Informatika',	
            'pekerjaan_ayah' => 4,
            'pekerjaan_ibu' => 5,
            'penghasilan_ayah' => 7,
            'penghasilan_ibu' => 9,
            'jumlah_saudara' => 2,
            'kondisi_anak' => 0,
            'status_penerima_beasiswa' => 0,
            'klaster_beasiswa' => null,
            'jenjang_pendidikan' => 2,
            'ipk' => 4,
            'aktif_organisasi' => 1,
            'semester' => 3,
            'sedang_menerima_beasiswa' => 0,
            'domisili' => 1,
            'tunggakan' => 1,
        ];

        $mahasiswa[] = [
            'nama' => 'Egry Lisyendri',
            'jurusan' => 'Teknik Informatika',	
            'pekerjaan_ayah' => 5,
            'pekerjaan_ibu' => 5,
            'penghasilan_ayah' => 7,
            'penghasilan_ibu' => 8,
            'jumlah_saudara' => 3,
            'kondisi_anak' => 0,
            'status_penerima_beasiswa' => 0,
            'klaster_beasiswa' => null,
            'jenjang_pendidikan' => 2,
            'ipk' => 4,
            'aktif_organisasi' => 1,
            'semester' => 1,
            'sedang_menerima_beasiswa' => 1,
            'domisili' => 1,
            'tunggakan' => 0,
        ];

        $mahasiswa[] = [
            'nama' => 'Elwida Sari',
            'jurusan' => 'Teknik Informatika',	
            'pekerjaan_ayah' => 4,
            'pekerjaan_ibu' => 4,
            'penghasilan_ayah' => 8,
            'penghasilan_ibu' => 9,
            'jumlah_saudara' => 1,
            'kondisi_anak' => 0,
            'status_penerima_beasiswa' => 0,
            'klaster_beasiswa' => null,
            'jenjang_pendidikan' => 1,
            'ipk' => 1,
            'aktif_organisasi' => 0,
            'semester' => 2,
            'sedang_menerima_beasiswa' => 1,
            'domisili' => 0,
            'tunggakan' => 1,
        ];

        $mahasiswa[] = [
            'nama' => 'Fikri Syahputra',
            'jurusan' => 'Teknik Informatika',	
            'pekerjaan_ayah' => 5,
            'pekerjaan_ibu' => 2,
            'penghasilan_ayah' => 7,
            'penghasilan_ibu' => 8,
            'jumlah_saudara' => 2,
            'kondisi_anak' => 0,
            'status_penerima_beasiswa' => 0,
            'klaster_beasiswa' => null,
            'jenjang_pendidikan' => 2,
            'ipk' => 3,
            'aktif_organisasi' => 0,
            'semester' => 4,
            'sedang_menerima_beasiswa' => 1,
            'domisili' => 1,
            'tunggakan' => 0,
        ];

        $mahasiswa[] = [
            'nama' => 'Fitri Khairani',
            'jurusan' => 'Teknik Informatika',	
            'pekerjaan_ayah' => 7,
            'pekerjaan_ibu' => 3,
            'penghasilan_ayah' => 9,
            'penghasilan_ibu' => 8,
            'jumlah_saudara' => 1,
            'kondisi_anak' => 0,
            'status_penerima_beasiswa' => 0,
            'klaster_beasiswa' => null,
            'jenjang_pendidikan' => 2,
            'ipk' => 4,
            'aktif_organisasi' => 0,
            'semester' => 4,
            'sedang_menerima_beasiswa' => 1,
            'domisili' => 0,
            'tunggakan' => 1,
        ];

        $mahasiswa[] = [
            'nama' => 'Indah Ocktavia',
            'jurusan' => 'Teknik Informatika',	
            'pekerjaan_ayah' => 5,
            'pekerjaan_ibu' => 5,
            'penghasilan_ayah' => 8,
            'penghasilan_ibu' => 8,
            'jumlah_saudara' => 1,
            'kondisi_anak' => 0,
            'status_penerima_beasiswa' => 0,
            'klaster_beasiswa' => null,
            'jenjang_pendidikan' => 2,
            'ipk' => 4,
            'aktif_organisasi' => 0,
            'semester' => 4,
            'sedang_menerima_beasiswa' => 0,
            'domisili' => 0,
            'tunggakan' => 1,
        ];

        $mahasiswa[] =[
            'nama' => 'Asep Subagja',
            'jurusan' => 'Teknik Informatika',
            'pekerjaan_ayah' => 5,
            'pekerjaan_ibu' => 5,
            'penghasilan_ayah' => 6,
            'penghasilan_ibu' => 6,
            'jumlah_saudara' => 3,
            'kondisi_anak' => 1,
            'status_penerima_beasiswa' => 0,
            'klaster_beasiswa' => null,
            'jenjang_pendidikan' => 2,
            'ipk' => 4,
            'aktif_organisasi' => 1,
            'semester' => 2,
            'sedang_menerima_beasiswa' => 1,
            'domisili' => 0,
            'tunggakan' => 0,
        ];

        $mahasiswa[] = [
            'nama' => 'Indah Permata Sari',
            'jurusan' => 'Teknik Informatika',	
            'pekerjaan_ayah' => 4,
            'pekerjaan_ibu' => 4,
            'penghasilan_ayah' => 8,
            'penghasilan_ibu' => 8,
            'jumlah_saudara' => 2,
            'kondisi_anak' => 0,
            'status_penerima_beasiswa' => 0,
            'klaster_beasiswa' => null,
            'jenjang_pendidikan' => 2,
            'ipk' => 3,
            'aktif_organisasi' => 1,
            'semester' => 4,
            'sedang_menerima_beasiswa' => 1,
            'domisili' => 1,
            'tunggakan' => 1,
        ];

        $mahasiswa[] = [
            'nama' => 'Muhammad Sulam Alhabid',
            'jurusan' => 'Teknik Informatika',	
            'pekerjaan_ayah' => 2,
            'pekerjaan_ibu' => 4,
            'penghasilan_ayah' => 6,
            'penghasilan_ibu' => 9,
            'jumlah_saudara' => 1,
            'kondisi_anak' => 0,
            'status_penerima_beasiswa' => 0,
            'klaster_beasiswa' => null,
            'jenjang_pendidikan' => 2,
            'ipk' => 4,
            'aktif_organisasi' => 1,
            'semester' => 3,
            'sedang_menerima_beasiswa' => 0,
            'domisili' => 1,
            'tunggakan' => 1,
        ];

        $mahasiswa[] =[
            'nama' => 'Nurul Fadilah',
            'jurusan' => 'Sistem Informasi',
            'pekerjaan_ayah' => 1,
            'pekerjaan_ibu' => 1,
            'penghasilan_ayah' => 2,
            'penghasilan_ibu' => 3,
            'jumlah_saudara' => 1,
            'kondisi_anak' => 0,
            'status_penerima_beasiswa' => 0,
            'klaster_beasiswa' => null,
            'jenjang_pendidikan' => 2,
            'ipk' => 4,
            'aktif_organisasi' => 1,
            'semester' => 3,
            'sedang_menerima_beasiswa' => 0,
            'domisili' => 1,
            'tunggakan' => 1,
        ];

        $mahasiswa[] =[
            'nama' => 'Dwi Agustina',
            'jurusan' => 'Teknik Informatika',
            'pekerjaan_ayah' => 1,
            'pekerjaan_ibu' => 1,
            'penghasilan_ayah' => 2,
            'penghasilan_ibu' => 3,
            'jumlah_saudara' => 1,
            'kondisi_anak' => 0,
            'status_penerima_beasiswa' => 0,
            'klaster_beasiswa' => null,
            'jenjang_pendidikan' => 2,
            'ipk' => 3,
            'aktif_organisasi' => 0,
            'semester' => 4,
            'sedang_menerima_beasiswa' => 1,
            'domisili' => 1,
            'tunggakan' => 1,
        ];

        Mahasiswa::insert($mahasiswa);
    }
}
