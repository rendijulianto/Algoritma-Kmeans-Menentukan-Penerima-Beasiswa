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

    public function beasiswa(Request $request)
    {
        $centroid=null;
        $mahasiswa=null;
        $step=null;
        $mahasiswa = Mahasiswa::where('status_penerima_beasiswa', 1)->orderBy('nama', 'asc')->get();
        $step = $request->step;
        if($step) {
            $type_centroid = $request->centroid ?? null;
            if($step==1) {
                $hasil_iterasi = DB::table('hasil_iterasi_beasiswa')->truncate();
                $hasil_centroid = DB::table('hasil_centroid_beasiswa')->truncate();

                if($type_centroid == "random") {
                    $mahasiswa1 = DB::table('mahasiswa')->inRandomOrder()->first();
                    $mahasiswa2 = DB::table('mahasiswa')->where('id', '!=', $mahasiswa1->id)->where('status_penerima_beasiswa', 1)->inRandomOrder()->first();
                    $mahasiswa3 = DB::table('mahasiswa')->where('id', '!=', $mahasiswa1->id)->where('id', '!=', $mahasiswa2->id)->where('status_penerima_beasiswa', 1)->inRandomOrder()->first();
                    $mahasiswa4 = DB::table('mahasiswa')->where('id', '!=', $mahasiswa1->id)->where('id', '!=', $mahasiswa2->id)->where('id', '!=', $mahasiswa3->id)->where('status_penerima_beasiswa', 1)->inRandomOrder()->first();
                } else {
                    $mahasiswa1 = DB::table('mahasiswa')->where('id', $request->centroid1)->first();
                    $mahasiswa2 = DB::table('mahasiswa')->where('id', $request->centroid2)->first();
                    $mahasiswa3 = DB::table('mahasiswa')->where('id', $request->centroid3)->first();
                    $mahasiswa4 = DB::table('mahasiswa')->where('id', $request->centroid4)->first();
                }

                $centroid = [
                    'centroid_1' => [
                        'jenjang_pendidikan' => $mahasiswa1->jenjang_pendidikan,
                        'ipk' => $mahasiswa1->ipk,
                        'aktif_organisasi' => $mahasiswa1->aktif_organisasi,
                        'semester' => $mahasiswa1->semester,
                        'sedang_menerima_beasiswa' => $mahasiswa1->sedang_menerima_beasiswa,
                        'domisili' => $mahasiswa1->domisili,
                        'tunggakan' => $mahasiswa1->tunggakan,
                    ],
                    'centroid_2' => [
                        'jenjang_pendidikan' => $mahasiswa2->jenjang_pendidikan,
                        'ipk' => $mahasiswa2->ipk,
                        'aktif_organisasi' => $mahasiswa2->aktif_organisasi,
                        'semester' => $mahasiswa2->semester,
                        'sedang_menerima_beasiswa' => $mahasiswa2->sedang_menerima_beasiswa,
                        'domisili' => $mahasiswa2->domisili,
                        'tunggakan' => $mahasiswa2->tunggakan,
                    ],
                    'centroid_3' => [
                        'jenjang_pendidikan' => $mahasiswa3->jenjang_pendidikan,
                        'ipk' => $mahasiswa3->ipk,
                        'aktif_organisasi' => $mahasiswa3->aktif_organisasi,
                        'semester' => $mahasiswa3->semester,
                        'sedang_menerima_beasiswa' => $mahasiswa3->sedang_menerima_beasiswa,
                        'domisili' => $mahasiswa3->domisili,
                        'tunggakan' => $mahasiswa3->tunggakan,
                    ],
                    'centroid_4' => [
                        'jenjang_pendidikan' => $mahasiswa4->jenjang_pendidikan,
                        'ipk' => $mahasiswa4->ipk,
                        'aktif_organisasi' => $mahasiswa4->aktif_organisasi,
                        'semester' => $mahasiswa4->semester,
                        'sedang_menerima_beasiswa' => $mahasiswa4->sedang_menerima_beasiswa,
                        'domisili' => $mahasiswa4->domisili,
                        'tunggakan' => $mahasiswa4->tunggakan,
                    ],
                ];
            } else {
                // ambil data centroid dari hasil iterasi sebelumnya
                // $hasil_iterasi = DB::table('hasil_iterasi')->where('iterasi', $step - 1)->get();
                // $hasil_centroid = DB::table('hasil_centroid')->orderBy('id', 'desc')->first();
                $centroid = [
                    'centroid_1' => [
                        'jenjang_pendidikan' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c1a'),
                        'ipk' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c1b'),
                        'aktif_organisasi' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c1c'),
                        'semester' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c1d'),
                        'sedang_menerima_beasiswa' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c1e'),
                        'domisili' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c1f'),
                        'tunggakan' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c1g'),
                    ],
                    'centroid_2' => [
                        'jenjang_pendidikan' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c2a'),
                        'ipk' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c2b'),
                        'aktif_organisasi' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c2c'),
                        'semester' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c2d'),
                        'sedang_menerima_beasiswa' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c2e'),
                        'domisili' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c2f'),
                        'tunggakan' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c2g'),
                    ],
                    'centroid_3' => [
                        'jenjang_pendidikan' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c3a'),
                        'ipk' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c3b'),
                        'aktif_organisasi' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c3c'),
                        'semester' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c3d'),
                        'sedang_menerima_beasiswa' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c3e'),
                        'domisili' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c3f'),
                        'tunggakan' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c3g'),
                    ],
                    'centroid_4' => [
                        'jenjang_pendidikan' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c4a'),
                        'ipk' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c4b'),
                        'aktif_organisasi' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c4c'),
                        'semester' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c4d'),
                        'sedang_menerima_beasiswa' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c4e'),
                        'domisili' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c4f'),
                        'tunggakan' => DB::table('hasil_centroid_beasiswa')->where('iterasi', $step - 1)->avg('c4g'),
                    ],
                ];
            }
            return view('kmeans.beasiswa', compact('centroid', 'mahasiswa', 'step'));
        } else {
            return view('kmeans.init-beasiswa', compact('mahasiswa'));
        }
    }
}
