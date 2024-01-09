<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::orderBy('nama', 'asc')->get();
        $daftar_beasiswa = ['BNI', 'Yayasan Pelayanan Kasih', 'Pemkot Bandung', 'UKT', 'Rektor Unikom', 'Yayasan Science', '-'];
        
        // buatkan daftar_mahasiswa per penerima beasiswa yang dilooping berdasarkan daftar_beasiswa
        $daftar_mahasiswa = [];
        foreach ($daftar_beasiswa as $beasiswa) {
            $daftar_mahasiswa[$beasiswa] = $mahasiswa->where('tipe_beasiswa', $beasiswa);
        }



        // buatkan grafik
        $total = $mahasiswa->count();
        $total_bni = $mahasiswa->where('tipe_beasiswa', 'BNI')->count();
        $total_ypk = $mahasiswa->where('tipe_beasiswa', 'Yayasan Pelayanan Kasih')->count();
        $total_pemkot_bandung = $mahasiswa->where('tipe_beasiswa', 'Pemkot Bandung')->count();
        $total_ukt = $mahasiswa->where('tipe_beasiswa', 'UKT')->count();
        $total_rektor_unikom = $mahasiswa->where('tipe_beasiswa', 'Rektor Unikom')->count();
        $total_ys = $mahasiswa->where('tipe_beasiswa', 'Yayasan Science')->count();
        $total_tidak = $mahasiswa->where('tipe_beasiswa', '-')->count();
        $data_grafik = [$total_bni, $total_ypk, $total_pemkot_bandung, $total_ukt, $total_rektor_unikom, $total_ys, $total_tidak];
       

        return view('dashboard.index', compact('daftar_mahasiswa', 'data_grafik',  'total', 'daftar_beasiswa', 'total_bni', 'total_ypk', 'total_pemkot_bandung', 'total_ukt', 'total_rektor_unikom', 'total_ys', 'total_tidak'));
    }

    public function resetIterasi()
    {
        $mahasiswa = Mahasiswa::all();
        foreach ($mahasiswa as $mhs) {
            $mhs->klaster_beasiswa = null;
            $mhs->tipe_beasiswa = null;
            $mhs->save();
        }
        DB::table('hasil_iterasi')->truncate();
        DB::table('hasil_centroid')->truncate();

        return redirect()->route('dashboard.index')->with('success', 'Berhasil mereset iterasi');
    }
}
