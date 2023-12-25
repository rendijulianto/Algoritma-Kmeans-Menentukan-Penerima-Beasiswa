<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Helpers\Kmeans;
use DB;

class KmeansController extends Controller
{
    public function index(Request $request)
    {   
        $step = $request->step ?? 1;
        if($step==1) {
            $hasil_iterasi = DB::table('hasil_iterasi')->truncate();
            $hasil_centroid = DB::table('hasil_centroid')->truncate();
           
           
            // // cari acak centroid
            // $mahasiswa1 = DB::table('mahasiswa')->inRandomOrder()->first();
            // // cari acak centroid yang berbeda dengan centroid pertama
            // $mahasiswa2 = DB::table('mahasiswa')->where('id', '!=', $mahasiswa1->id)->inRandomOrder()->first();
            // // cari acak centroid yang berbeda dengan centroid pertama dan kedua
            // $mahasiswa3 = DB::table('mahasiswa')->where('id', '!=', $mahasiswa1->id)->where('id', '!=', $mahasiswa2->id)->inRandomOrder()->first();
            // // dd($mahasiswa1, $mahasiswa2, $mahasiswa3);

            // $centroid = [
            //     'centroid_1' => [
            //         'pekerjaan_ayah' => $mahasiswa1->pekerjaan_ayah,
            //         'pekerjaan_ibu' => $mahasiswa1->pekerjaan_ibu,
            //         'penghasilan_ayah' => $mahasiswa1->penghasilan_ayah,
            //         'penghasilan_ibu' => $mahasiswa1->penghasilan_ibu,
            //         'jumlah_saudara' => $mahasiswa1->jumlah_saudara,
            //         'kondisi_anak' => $mahasiswa1->kondisi_anak,
            //     ],
            //     'centroid_2' => [
            //         'pekerjaan_ayah' => $mahasiswa2->pekerjaan_ayah,
            //         'pekerjaan_ibu' => $mahasiswa2->pekerjaan_ibu,
            //         'penghasilan_ayah' => $mahasiswa2->penghasilan_ayah,
            //         'penghasilan_ibu' => $mahasiswa2->penghasilan_ibu,
            //         'jumlah_saudara' => $mahasiswa2->jumlah_saudara,
            //         'kondisi_anak' => $mahasiswa2->kondisi_anak,
            //     ],
            //     'centroid_3' => [
            //         'pekerjaan_ayah' => $mahasiswa3->pekerjaan_ayah,
            //         'pekerjaan_ibu' => $mahasiswa3->pekerjaan_ibu,
            //         'penghasilan_ayah' => $mahasiswa3->penghasilan_ayah,
            //         'penghasilan_ibu' => $mahasiswa3->penghasilan_ibu,
            //         'jumlah_saudara' => $mahasiswa3->jumlah_saudara,
            //         'kondisi_anak' => $mahasiswa3->kondisi_anak,
            //     ],
            // ];
           
            $centroid = [
                'centroid_1' => [
                    'pekerjaan_ayah' => 5,
                    'pekerjaan_ibu' => 5,
                    'penghasilan_ayah' => 6,
                    'penghasilan_ibu' => 6,
                    'jumlah_saudara' => 3,
                    'kondisi_anak' => 1,
                ],
                'centroid_2' => [
                    'pekerjaan_ayah' => 3,
                    'pekerjaan_ibu' => 3,
                    'penghasilan_ayah' => 4,
                    'penghasilan_ibu' => 5,
                    'jumlah_saudara' => 2,
                    'kondisi_anak' => 0,
                ],
                'centroid_3' => [
                    'pekerjaan_ayah' => 1,
                    'pekerjaan_ibu' => 1,
                    'penghasilan_ayah' => 2,
                    'penghasilan_ibu' => 3,
                    'jumlah_saudara' => 1,
                    'kondisi_anak' => 0,
                ],
            ];
        } else {
            // ambil data centroid dari hasil iterasi sebelumnya
            $hasil_iterasi = DB::table('hasil_iterasi')->where('iterasi', $step - 1)->get();
            // $hasil_centroid = DB::table('hasil_centroid')->orderBy('id', 'desc')->first();
            $centroid = [
                'centroid_1' => [
                    'pekerjaan_ayah' => DB::table('hasil_centroid')->where('iterasi', $step - 1)->avg('c1a'),
                    'pekerjaan_ibu' => DB::table('hasil_centroid')->where('iterasi', $step - 1)->avg('c1b'),
                    'penghasilan_ayah' => DB::table('hasil_centroid')->where('iterasi', $step - 1)->avg('c1c'),
                    'penghasilan_ibu' => DB::table('hasil_centroid')->where('iterasi', $step - 1)->avg('c1d'),
                    'jumlah_saudara' => DB::table('hasil_centroid')->where('iterasi', $step - 1)->avg('c1e'),
                    'kondisi_anak' => DB::table('hasil_centroid')->where('iterasi', $step - 1)->avg('c1f'),
                ],
                'centroid_2' => [
                    'pekerjaan_ayah' => DB::table('hasil_centroid')->where('iterasi', $step - 1)->avg('c2a'),
                    'pekerjaan_ibu' => DB::table('hasil_centroid')->where('iterasi', $step - 1)->avg('c2b'),
                    'penghasilan_ayah' => DB::table('hasil_centroid')->where('iterasi', $step - 1)->avg('c2c'),
                    'penghasilan_ibu' => DB::table('hasil_centroid')->where('iterasi', $step - 1)->avg('c2d'),
                    'jumlah_saudara' => DB::table('hasil_centroid')->where('iterasi', $step - 1)->avg('c2e'),
                    'kondisi_anak' => DB::table('hasil_centroid')->where('iterasi', $step - 1)->avg('c2f'),
                ],
                'centroid_3' => [
                    'pekerjaan_ayah' => DB::table('hasil_centroid')->where('iterasi', $step - 1)->avg('c3a'),
                    'pekerjaan_ibu' => DB::table('hasil_centroid')->where('iterasi', $step - 1)->avg('c3b'),
                    'penghasilan_ayah' => DB::table('hasil_centroid')->where('iterasi', $step - 1)->avg('c3c'),
                    'penghasilan_ibu' => DB::table('hasil_centroid')->where('iterasi', $step - 1)->avg('c3d'),
                    'jumlah_saudara' => DB::table('hasil_centroid')->where('iterasi', $step - 1)->avg('c3e'),
                    'kondisi_anak' => DB::table('hasil_centroid')->where('iterasi', $step - 1)->avg('c3f'),
                ],
            ];

        }
        $mahasiswa = Mahasiswa::all();
        return view('kmeans.index', compact('centroid', 'mahasiswa', 'step'));
    }
}
