<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::orderBy('nama', 'asc')->paginate(20);

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'nama' => 'required',
            'jurusan' => 'required|in:Teknik Informatika,Sistem Komputer,Teknik Industri,Teknik Arsitektur,Sistem Informasi,Perencanaan Wilayah Dan Kota,Teknik Komputer,Manajemen Informatika,Komputerisasi Akuntansi,Teknik Sipil,Teknik Elektro',
            'pekerjaan_ayah' => 'required|numeric|min:1|max:8',
            'pekerjaan_ibu' => 'required|numeric|min:1|max:8',
            'penghasilan_ayah' => 'required|numeric|min:1|max:9',
            'penghasilan_ibu' => 'required|numeric|min:1|max:9',
            'jumlah_saudara' => 'required|numeric|min:1|max:4',
            'kondisi_anak' => 'required|numeric|min:0|max:2',
            'jenjang_pendidikan' => 'required|numeric|min:1|max:3',
            'ipk' => 'required|numeric|min:1|max:4',
            'aktif_organisasi' => 'required|numeric|min:0|max:1',
            'semester' => 'required|numeric|min:0|max:9',
            'sedang_menerima_beasiswa' => 'required|numeric|min:0|max:1',
            'domisili' => 'required|numeric|min:0|max:1',
            'tunggakan' => 'required|numeric|min:0|max:1',
        ]);




        Mahasiswa::create([
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'penghasilan_ayah' => $request->penghasilan_ayah,
            'penghasilan_ibu' => $request->penghasilan_ibu,
            'jumlah_saudara' => $request->jumlah_saudara,
            'kondisi_anak' => $request->kondisi_anak,
            'status_penerima_beasiswa' => 0,
            'klaster_beasiswa' => null,
            'jenjang_pendidikan' => $request->jenjang_pendidikan,
            'ipk' => $request->ipk,
            'aktif_organisasi' => $request->aktif_organisasi,
            'semester' => $request->semester,
            'sedang_menerima_beasiswa' => $request->sedang_menerima_beasiswa,
            'domisili' => $request->domisili,
            'tunggakan' => $request->tunggakan,

        ]);

        return redirect()->route('mahasiswa.create')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $this->validate($request,[
            'nama' => 'required',
            'jurusan' => 'required|in:Teknik Informatika,Sistem Komputer,Teknik Industri,Teknik Arsitektur,Sistem Informasi,Perencanaan Wilayah Dan Kota,Teknik Komputer,Manajemen Informatika,Komputerisasi Akuntansi,Teknik Sipil,Teknik Elektro',
            'pekerjaan_ayah' => 'required|numeric|min:1|max:8',
            'pekerjaan_ibu' => 'required|numeric|min:1|max:8',
            'penghasilan_ayah' => 'required|numeric|min:1|max:9',
            'penghasilan_ibu' => 'required|numeric|min:1|max:9',
            'jumlah_saudara' => 'required|numeric|min:1|max:4',
            'kondisi_anak' => 'required|numeric|min:0|max:2',
            'jenjang_pendidikan' => 'required|numeric|min:1|max:3',
            'ipk' => 'required|numeric|min:1|max:4',
            'aktif_organisasi' => 'required|numeric|min:0|max:1',
            'semester' => 'required|numeric|min:0|max:9',
            'sedang_menerima_beasiswa' => 'required|numeric|min:0|max:1',
            'domisili' => 'required|numeric|min:0|max:1',
            'tunggakan' => 'required|numeric|min:0|max:1',

        ]);

        $mahasiswa->update([
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'penghasilan_ayah' => $request->penghasilan_ayah,
            'penghasilan_ibu' => $request->penghasilan_ibu,
            'jumlah_saudara' => $request->jumlah_saudara,
            'kondisi_anak' => $request->kondisi_anak,
            'jenjang_pendidikan' => $request->jenjang_pendidikan,
            'ipk' => $request->ipk,
            'aktif_organisasi' => $request->aktif_organisasi,
            'semester' => $request->semester,
            'sedang_menerima_beasiswa' => $request->sedang_menerima_beasiswa,
            'domisili' => $request->domisili,
            'tunggakan' => $request->tunggakan,
        ]);

        return redirect()->route('mahasiswa.edit', $mahasiswa->id)->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus');
    }
}
