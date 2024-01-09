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
        $mahasiswa = Mahasiswa::orderBy('nama', 'asc')->get();
        $step = $request->step;
        $stop = false;
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
                $centroid_sebelumnya = [
                    'centroid_1' => [
                        'pekerjaan_ayah' => DB::table('hasil_centroid')->where('iterasi', $step - 2)->avg('c1a'),
                        'pekerjaan_ibu' => DB::table('hasil_centroid')->where('iterasi', $step - 2)->avg('c1b'),
                        'penghasilan_ayah' => DB::table('hasil_centroid')->where('iterasi', $step - 2)->avg('c1c'),
                        'penghasilan_ibu' => DB::table('hasil_centroid')->where('iterasi', $step - 2)->avg('c1d'),
                        'jumlah_saudara' => DB::table('hasil_centroid')->where('iterasi', $step - 2)->avg('c1e'),
                        'kondisi_anak' => DB::table('hasil_centroid')->where('iterasi', $step - 2)->avg('c1f'),
                    ],
                    'centroid_2' => [
                        'pekerjaan_ayah' => DB::table('hasil_centroid')->where('iterasi', $step - 2)->avg('c2a'),
                        'pekerjaan_ibu' => DB::table('hasil_centroid')->where('iterasi', $step - 2)->avg('c2b'),
                        'penghasilan_ayah' => DB::table('hasil_centroid')->where('iterasi', $step - 2)->avg('c2c'),
                        'penghasilan_ibu' => DB::table('hasil_centroid')->where('iterasi', $step - 2)->avg('c2d'),
                        'jumlah_saudara' => DB::table('hasil_centroid')->where('iterasi', $step - 2)->avg('c2e'),
                        'kondisi_anak' => DB::table('hasil_centroid')->where('iterasi', $step - 2)->avg('c2f'),
                    ],
                    'centroid_3' => [
                        'pekerjaan_ayah' => DB::table('hasil_centroid')->where('iterasi', $step - 2)->avg('c3a'),
                        'pekerjaan_ibu' => DB::table('hasil_centroid')->where('iterasi', $step - 2)->avg('c3b'),
                        'penghasilan_ayah' => DB::table('hasil_centroid')->where('iterasi', $step - 2)->avg('c3c'),
                        'penghasilan_ibu' => DB::table('hasil_centroid')->where('iterasi', $step - 2)->avg('c3d'),
                        'jumlah_saudara' => DB::table('hasil_centroid')->where('iterasi', $step - 2)->avg('c3e'),
                        'kondisi_anak' => DB::table('hasil_centroid')->where('iterasi', $step - 2)->avg('c3f'),
                    ],
                ];


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


                if ($centroid_sebelumnya['centroid_1'] == $centroid['centroid_1'] && $centroid_sebelumnya['centroid_2'] == $centroid['centroid_2'] && $centroid_sebelumnya['centroid_3'] == $centroid['centroid_3']) {
                    $stop = true;
                    $this->setBeasiswa();
                }

        
            }
            return view('kmeans.index', compact('centroid', 'mahasiswa', 'step', 'stop'));
        } else {
            return view('kmeans.init', compact('mahasiswa'));
        }
    }


    private function setBeasiswa()
    {
        $mahasiswa = Mahasiswa::all();
        foreach ($mahasiswa as $key => $value) {
            $hasil_iterasi = DB::table('hasil_iterasi')->where('mahasiswa_id', $value->id)->orderBy('iterasi', 'desc')->first();
            $c1 = $hasil_iterasi->c1;
            $c2 = $hasil_iterasi->c2;
            $c3 = $hasil_iterasi->c3;
            $cluster = $hasil_iterasi->rata_rata;
            $mahasiswa[$key]->tipe_beasiswa = $this->tipeBeasiswa($value, $cluster);
            $mahasiswa[$key]->klaster_beasiswa = $cluster;
            $mahasiswa[$key]->save();
        }
        
    }

    // clear
    private function syaratBeasiswaRektorUnikomYS($mahasiswa)
    {
        if ($mahasiswa['semester'] >= 1 && $mahasiswa['semester'] <= 8) {
            if ($mahasiswa['ipk'] >= 4) {
                if ($mahasiswa['prestasi'] == 1) {
                    if ($mahasiswa['aktif_organisasi'] == 1) {
                        return true;
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            } else {
                return false; 
            }
        } else {
            return false;
        }
    }

    private function syaratBeasiswaYayasanScience($mahasiswa)
    {
        if ($mahasiswa['semester'] >= 1 && $mahasiswa['semester'] <= 8) {
            if ($mahasiswa['ipk'] >= 4) {
                if ($mahasiswa['prestasi'] == 1) {
                    if ($mahasiswa['aktif_organisasi'] == 1) {
                        return true;
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            } else {
                return false; 
            }
        } else {
            return false;
        }
    }

    private function syaratBeasiswaUKT($mahasiswa)
    {
        if ($mahasiswa['jenjang_pendidikan'] == 1 || $mahasiswa['jenjang_pendidikan'] == 2) {
            if ($mahasiswa['ipk'] >= 1) {
                if ($mahasiswa['tunggakan'] == 1) {
                    // jika jentang pendidikan 1 semester hanya bisa 3,5
                    if ($mahasiswa['jenjang_pendidikan'] == 1) {
                        if ($mahasiswa['semester'] == 3 || $mahasiswa['semester'] == 5) {
                            return true;
                        } else {
                            return false;
                        }
                    } elseif ($mahasiswa['jenjang_pendidikan'] == 2) {
                        if ($mahasiswa['semester'] == 3 || $mahasiswa['semester'] == 5 || $mahasiswa['semester'] == 7) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                } else {
                    return false; 
                }
            } else {
                return false; 
            }
        } else {
            return false;
        }
    }

    private function syaratBeasiswaBNI($mahasiswa)
    {
        // jenjang_pendidikan == 2
        if ($mahasiswa['jenjang_pendidikan'] == 2) {
            // semester 2 - 8
            if ($mahasiswa['semester'] >= 2 && $mahasiswa['semester'] <= 8) {
                // ipk 3 - 4
                if ($mahasiswa['ipk'] >= 4) {
                    // aktif organisasi 1
                    if ($mahasiswa['aktif_organisasi'] == 1) {
                            if ($mahasiswa['sedang_menerima_beasiswa'] == 1) {
                                return true;
                            } else {
                                return false;
                            }
                    } else {
                        return false; 
                    }
                } else {
                    return false; 
                }
            } else {
                return false; 
            }
        } else {
            return false;
        }
    }


    private function syaratBeasiswaYayasanPelayananKasih($mahasiswa)
    {
    // D3 - S1
        if ($mahasiswa['jenjang_pendidikan'] == 1 || $mahasiswa['jenjang_pendidikan'] == 2) {
            // semester 2 - 8
            if ($mahasiswa['semester'] >= 2 && $mahasiswa['semester'] <= 8) {
                // ipk 3 - 4
                if ($mahasiswa['ipk'] >= 4) {
                    // aktif organisasi 1
                    if ($mahasiswa['aktif_organisasi'] == 1) {
                        // Tidak sedang menerima beasiswa dari pihak lain
                        if ($mahasiswa['sedang_menerima_beasiswa'] == 1) {
                            return true;
                        } else {
                            return false;
                        }
                    } else {
                        return false; 
                    }
                } else {
                    return false; 
                }
            } else {
                return false; 
            }
        } else{ 
            return false;
        }
    }

    private function syaratBeasiswaPemkotBandung($mahasiswa)
    {
        if ($mahasiswa['domisili'] == 1) {
            if ($mahasiswa['ipk'] >= 4) {
                if ($mahasiswa['sedang_menerima_beasiswa'] == 1) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false; 
            }
        } else {
            return false;
        }
    }

    private function tipeBeasiswa($mahasiswa, $cluster)
    {

        $mahasiswa = $mahasiswa->toArray();
        // mahasiswa bernama amelia
        
        if ($cluster == "C1") {
            if ($this->syaratBeasiswaBNI($mahasiswa)) {
                $total_beasiswa_bni = Mahasiswa::where('tipe_beasiswa', 'BNI')->count();
                $total_beasiswa_ypk = Mahasiswa::where('tipe_beasiswa', 'Yayasan Pelayanan Kasih')->count();
                if ($total_beasiswa_bni < $total_beasiswa_ypk) {
                    return "BNI";
                } else {
                    return "Yayasan Pelayanan Kasih";
                }
            } elseif ($this->syaratBeasiswaYayasanPelayananKasih($mahasiswa)) {
                return "Yayasan Pelayanan Kasih";
            } elseif ($this->syaratBeasiswaPemkotBandung($mahasiswa)) {
                return "Pemkot Bandung";
            }else if ($this->syaratBeasiswaUKT($mahasiswa)) {
                    return "UKT";
            } else {
                return "-";
            }
        } elseif ($cluster == "C2" || $cluster == "C3") {
            if ($this->syaratBeasiswaRektorUnikomYS($mahasiswa)) {
                $total_beasiswa_rektor_unikom = Mahasiswa::where('tipe_beasiswa', 'Rektor Unikom')->count();
                $total_beasiswa_science = Mahasiswa::where('tipe_beasiswa', 'Yayasan Science')->count();
                if ($total_beasiswa_rektor_unikom < $total_beasiswa_science) {
                    return "Rektor Unikom";
                } else {
                    return "Yayasan Science";
                }
            } else {
                return "-";
            }
           
        } else {
            return "-";
        }

        
    }


}
