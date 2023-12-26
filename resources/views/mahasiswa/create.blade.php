@extends('layouts.app')
@section('breadcrumb')
<div class="font-weight-medium shadow-none position-relative overflow-hidden mb-4">
  <div class="d-sm-flex d-block justify-content-between align-items-center">
     <h5 class="mb-0 fw-semibold text-uppercase"> 
        Kelola Mahasiswa - Tambah Mahasiswa
     </h5>
  </div>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
     <div class="card">
        <div class="card-body">
           <h5 class="card-title mb-0">Form Mahasiswa</h5>
            <div class="alert alert-info mt-4" role="alert">
                <h4 class="alert-heading">Perhatian!</h4>
                <p>
                   Informasi yang anda masukkan akan tersimpan di database. Pastikan data yang anda masukkan sudah benar.
                </p>
            </div>
            @if (session('success'))
            <div class="alert alert-success mt-4" role="alert">
                <h4 class="alert-heading">Berhasil!</h4>
                <p>
                    {{ session('success') }}
                </p>
            </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger mt-4" role="alert">
                    <h4 class="alert-heading">Gagal!</h4>
                    <p>
                        {{ session('error') }}
                    </p>
                </div>
            @endif
            <form action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf
     
              <div class="row mt-3">
                <div class="col-12">
                    <div class="mb-4">
                        <label for="name" class="form-label fw-semibold">
                            Nama Lengkap
                        </label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-4">
                        <label for="jenjang_pendidikan" class="form-label fw-semibold">
                            Jenjang Pendidikan
                        </label>
                        <select class="form-select" aria-label="Default select example" name="jenjang_pendidikan" id="jenjang_pendidikan">
                            <option selected>Pilih Jenjang Pendidikan</option>
                            <option value="2">S1</option>
                            <option value="1">D3</option>
                        </select>
                        @error('jenjang_pendidikan')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-4">
                        <label for="jurusan" class="form-label fw-semibold">
                            Jurusan
                        </label>
                        <select class="form-select" aria-label="Default select example" name="jurusan" id="jurusan">
                            <option selected>Pilih Jurusan</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Komputer">Sistem Komputer</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Perencanaan Wilayah Dan Kota">Perencanaan Wilayah Dan Kota</option>
                            <option value="Teknik Komputer">Teknik Komputer</option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                            <option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                        </select>
                        @error('jurusan')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-4">
                        <label for="ipk" class="form-label fw-semibold">
                            IPK
                        </label>
                        <select class="form-select" aria-label="Default select example" name="ipk" id="ipk">
                            <option selected>Pilih IPK</option>
                            <option value="1">0 - 99</option>
                            <option value="2">1 - 1,99</option>
                            <option value="3">2 - 2,99</option>
                            <option value="4">3 - 4</option>
                        </select>
                        @error('ipk')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-4">
                        <label for="aktif_organisasi" class="form-label fw-semibold">
                            Keaktifan Organisasi
                        </label>
                        <select class="form-select" aria-label="Default select example" name="aktif_organisasi" id="aktif_organisasi">
                            <option selected>Pilih IPK</option>
                            <option value="0">Tidak Aktif</option>
                            <option value="1">Aktif Organisasi</option>
                        </select>
                        @error('aktif_organisasi')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-4">
                        <label for="semester" class="form-label fw-semibold">
                            Semester
                        </label>
                        <select class="form-select" aria-label="Default select example" name="semester" id="semester">
                            <option selected>Pilih Semester</option>
                            <option value="0">Semester 8 > </option>
                            <option value="1">Semester 1-2</option>
                            <option value="2">Semester 3-4</option>
                            <option value="3">Semester 5-6</option>
                            <option value="4">Semester 7-8</option>
                        </select>
                        @error('semester')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- sedang_menerima_beasiswa --}}

                <div class="col-6">
                    <div class="mb-4">
                        <label for="sedang_menerima_beasiswa" class="form-label fw-semibold">
                            Sedang Menerima Beasiswa
                        </label>
                        <select class="form-select" aria-label="Default select example" name="sedang_menerima_beasiswa" id="sedang_menerima_beasiswa">
                            <option selected>Pilih Semester</option>
                            <option value="0">Ya</option>
                            <option value="1">Tidak</option>
                        </select>
                        @error('sedang_menerima_beasiswa')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-4">
                        <label for="domisili" class="form-label fw-semibold">
                            Domisili
                        </label>
                        <select class="form-select" aria-label="Default select example" name="domisili" id="domisili">
                            <option selected>Pilih Domisili</option>
                            <option value="0">Luar Bandung</option>
                            <option value="1">Bandung</option>
                        </select>
                        @error('domisili')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                {{-- tunggakan --}}

                <div class="col-6">
                    <div class="mb-4">
                        <label for="tunggakan" class="form-label fw-semibold">
                            Tunggakan
                        </label>
                        <select class="form-select" aria-label="Default select example" name="tunggakan" id="tunggakan">
                            <option selected>Pilih Tunggakan</option>
                            <option value="0">Ada</option>
                            <option value="1">Tidak Ada</option>
                        </select>
                        @error('tunggakan')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                

                <hr>
                <h5 class="card-title mb-0">Data Keluarga</h5>
                {{-- pekerjaan ayah --}}
                <div class="col-6">
                    <div class="mb-4">
                        <label for="pekerjaan_ayah" class="form-label fw-semibold">
                            Pekerjaan Ayah
                        </label>
                        <select class="form-select" aria-label="Default select example" name="pekerjaan_ayah" id="pekerjaan_ayah">
                            <option selected>Pilih Pekerjaan Ayah</option>
                            <option value="1">PNS/TNI/POLRI/BUMN</option>
                            <option value="2">Pegawai Swasta</option>
                            <option value="3">Wiraswasta</option>
                            <option value="4">Petani/Nelayan/Supir</option>
                            <option value="5">Tukang/Tidak-Tetap/Lain-lain</option>
                            <option value="6">Pensiunan</option>
                            <option value="7">Tidak Bekerja</option>
                            <option value="8">Telah Meninggal Dunia</option>
                        </select>
                        @error('pekerjaan_ayah')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- pekerjaan ibu --}}
                <div class="col-6">
                    <div class="mb-4">
                        <label for="pekerjaan_ibu" class="form-label fw-semibold">
                            Pekerjaan Ibu
                        </label>
                        <select class="form-select" aria-label="Default select example" name="pekerjaan_ibu" id="pekerjaan_ibu">
                            <option selected>Pilih Pekerjaan Ayah</option>
                            <option value="1">PNS/TNI/POLRI/BUMN</option>
                            <option value="2">Pegawai Swasta</option>
                            <option value="3">Wiraswasta</option>
                            <option value="4">Petani/Nelayan/Supir</option>
                            <option value="5">Tukang/Tidak-Tetap/Lain-lain</option>
                            <option value="6">Pensiunan</option>
                            <option value="7">Tidak Bekerja</option>
                            <option value="8">Telah Meninggal Dunia</option>
                        </select>
                        @error('pekerjaan_ayah')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- penghasilan ayah --}}
                <div class="col-6">
                    <div class="mb-4">
                        <label for="penghasilan_ayah" class="form-label fw-semibold">
                            Penghasilan Ayah
                        </label>
                        <select class="form-select" aria-label="Default select example" name="penghasilan_ayah" id="penghasilan_ayah">
                            <option selected>Pilih Penghasilan Ayah</option>
                            <option value="1">Lebih dari 7.000.000</option>
                            <option value="2">Rp. 6.000.000 - Rp. 7.000.000</option>
                            <option value="3">Rp. 5.000.000 - Rp. 5.999.999</option>
                            <option value="4">Rp. 4.000.000 - Rp. 4.999.999</option>
                            <option value="5">Rp. 3.000.000 - Rp. 3.999.999</option>
                            <option value="6">Rp. 2.000.000 - Rp. 2.999.999</option>
                            <option value="7">Rp. 1.000.000 - Rp. 1.999.999</option>
                            <option value="8">Rp. 500.000 - Rp. 999.999</option>
                            <option value="9">Tidak Berpenghasilan</option>
                        </select>
                        @error('penghasilan_ayah')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-4">
                        <label for="penghasilan_ibu" class="form-label fw-semibold">
                            Penghasilan Ibu
                        </label>
                        <select class="form-select" aria-label="Default select example" name="penghasilan_ibu" id="penghasilan_ibu">
                            <option selected>Pilih Penghasilan Ibu</option>
                            <option value="1">Lebih dari 7.000.000</option>
                            <option value="2">Rp. 6.000.000 - Rp. 7.000.000</option>
                            <option value="3">Rp. 5.000.000 - Rp. 5.999.999</option>
                            <option value="4">Rp. 4.000.000 - Rp. 4.999.999</option>
                            <option value="5">Rp. 3.000.000 - Rp. 3.999.999</option>
                            <option value="6">Rp. 2.000.000 - Rp. 2.999.999</option>
                            <option value="7">Rp. 1.000.000 - Rp. 1.999.999</option>
                            <option value="8">Rp. 500.000 - Rp. 999.999</option>
                            <option value="9">Tidak Berpenghasilan</option>
                        </select>
                        @error('penghasilan_ibu')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- jumlah saudara --}}
                <div class="col-6">
                    <div class="mb-4">
                        <label for="jumlah_saudara" class="form-label fw-semibold">
                            Jumlah Saudara
                        </label>
                        <select class="form-select" aria-label="Default select example" name="jumlah_saudara" id="jumlah_saudara">
                            <option selected>Pilih Jumlah Saudara</option>
                            <option value="1">Kurang dari 3 orang</option>
                            <option value="2">3 - 5 orang</option>
                            <option value="3">6 - 7 orang</option>
                            <option value="4">Lebih dari 7 orang</option>
                        </select>
                        @error('jumlah_saudara')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-4">
                        <label for="kondisi_anak" class="form-label fw-semibold">
                            Kondisi Anak
                        </label>
                        <select class="form-select" aria-label="Default select example" name="kondisi_anak" id="kondisi_anak">
                            <option selected>Pilih Kondisi Anak</option>
                            <option value="0">Tidak Yatim</option>
                            <option value="1">Yatim</option>
                            <option value="2">Yatim Piatu</option>
                        </select>
                        @error('jumlah_saudara')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <hr>
               
              </div>
              <button type="submit" class="btn btn-primary">
                <iconify-icon data-icon="solid:save"></iconify-icon> Simpan
                </button>
            </form>
        </div>
     </div>
  </div>
</div>
@endsection