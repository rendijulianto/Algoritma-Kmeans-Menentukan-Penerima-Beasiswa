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
        $centroid=null;
        $mahasiswa=null;
        $step=null;
        // orderby random name
        $mahasiswa = Mahasiswa::orderBy('nama', 'asc')->get();
        $step = $request->step;
        if ($step) {
            $type_centroid = $request->centroid ?? null;
            if($step==1) {
                $hasil_iterasi = DB::table('hasil_iterasi')->truncate();
                $hasil_centroid = DB::table('hasil_centroid')->truncate();

                if($type_centroid == "random") {
                    $mahasiswa1 = DB::table('mahasiswa')->inRandomOrder()->first();
                    $mahasiswa2 = DB::table('mahasiswa')->where('id', '!=', $mahasiswa1->id)->inRandomOrder()->first();
                    $mahasiswa3 = DB::table('mahasiswa')->where('id', '!=', $mahasiswa1->id)->where('id', '!=', $mahasiswa2->id)->inRandomOrder()->first();
                   
                } else {
                    $mahasiswa1 = DB::table('mahasiswa')->where('id', $request->centroid1)->first();
                    $mahasiswa2 = DB::table('mahasiswa')->where('id', $request->centroid2)->first();
                    $mahasiswa3 = DB::table('mahasiswa')->where('id', $request->centroid3)->first();
                }


                $centroid = [
                    'centroid_1' => [
                        'pekerjaan_ayah' => $mahasiswa1->pekerjaan_ayah,
                        'pekerjaan_ibu' => $mahasiswa1->pekerjaan_ibu,
                        'penghasilan_ayah' => $mahasiswa1->penghasilan_ayah,
                        'penghasilan_ibu' => $mahasiswa1->penghasilan_ibu,
                        'jumlah_saudara' => $mahasiswa1->jumlah_saudara,
                        'kondisi_anak' => $mahasiswa1->kondisi_anak,
                    ],
                    'centroid_2' => [
                        'pekerjaan_ayah' => $mahasiswa2->pekerjaan_ayah,
                        'pekerjaan_ibu' => $mahasiswa2->pekerjaan_ibu,
                        'penghasilan_ayah' => $mahasiswa2->penghasilan_ayah,
                        'penghasilan_ibu' => $mahasiswa2->penghasilan_ibu,
                        'jumlah_saudara' => $mahasiswa2->jumlah_saudara,
                        'kondisi_anak' => $mahasiswa2->kondisi_anak,
                    ],
                    'centroid_3' => [
                        'pekerjaan_ayah' => $mahasiswa3->pekerjaan_ayah,
                        'pekerjaan_ibu' => $mahasiswa3->pekerjaan_ibu,
                        'penghasilan_ayah' => $mahasiswa3->penghasilan_ayah,
                        'penghasilan_ibu' => $mahasiswa3->penghasilan_ibu,
                        'jumlah_saudara' => $mahasiswa3->jumlah_saudara,
                        'kondisi_anak' => $mahasiswa3->kondisi_anak,
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
            return view('kmeans.index', compact('centroid', 'mahasiswa', 'step'));
        } else {
            
            return view('kmeans.init', compact('mahasiswa'));
        }
    }

}
