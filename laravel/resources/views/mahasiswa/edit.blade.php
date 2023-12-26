@extends('layouts.app')
@section('breadcrumb')
<div class="font-weight-medium shadow-none position-relative overflow-hidden mb-4">
  <div class="d-sm-flex d-block justify-content-between align-items-center">
     <h5 class="mb-0 fw-semibold text-uppercase"> 
        Kelola Mahasiswa - Edit Mahasiswa
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
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" value="{{ $mahasiswa->nama }}">
                        @error('nama')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- jurusan  --}}
                <div class="col-12">
                    <div class="mb-4">
                        <label for="jurusan" class="form-label fw-semibold">
                            Jurusan
                        </label>
                        <select class="form-select" aria-label="Default select example" name="jurusan" id="jurusan">
                            <option selected>Pilih Jurusan</option>
                            <option 
                            {{ $mahasiswa->jurusan == 'Teknik Informatika' ? 'selected' : '' }}
                            value="Teknik Informatika">Teknik Informatika</option>
                            <option 
                            {{ $mahasiswa->jurusan == 'Teknik Sipil' ? 'selected' : '' }}
                            value="Teknik Sipil">Teknik Sipil</option>
                            <option 
                            {{ $mahasiswa->jurusan == 'Teknik Mesin' ? 'selected' : '' }}
                            value="Teknik Mesin">Teknik Mesin</option>
                            <option 
                            {{ $mahasiswa->jurusan == 'Teknik Elektro' ? 'selected' : '' }}
                            value="Teknik Elektro">Teknik Elektro</option>
                            <option 
                            {{ $mahasiswa->jurusan == 'Teknik Kimia' ? 'selected' : '' }}
                            value="Teknik Kimia">Teknik Kimia</option>
                            {{-- Pend. Matematika --}}
                            <option 
                            {{ $mahasiswa->jurusan == 'Pend. Matematika' ? 'selected' : '' }}
                            value="Pend. Matematika">Pend. Matematika</option>
                            {{-- Pend. Fisika --}}

                        </select>
                        @error('jurusan')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- pekerjaan ayah --}}
                <div class="col-6">
                    <div class="mb-4">
                        <label for="pekerjaan_ayah" class="form-label fw-semibold">
                            Pekerjaan Ayah
                        </label>
                        <select class="form-select" aria-label="Default select example" name="pekerjaan_ayah" id="pekerjaan_ayah">
                            <option disabled>Pilih Pekerjaan Ayah</option>
                            <option 
                                {{ $mahasiswa->pekerjaan_ayah == '1' ? 'selected' : '' }}
                            value="1">PNS/TNI/POLRI/BUMN</option>
                            <option 
                                {{  $mahasiswa->pekerjaan_ayah == '2' ? 'selected' : '' }}
                            value="2">Pegawai Swasta</option>
                            <option 
                                {{  $mahasiswa->pekerjaan_ayah == '3' ? 'selected' : '' }}
                            value="3">Wiraswasta</option>
                            <option 
                                {{  $mahasiswa->pekerjaan_ayah == '4' ? 'selected' : '' }}
                            value="4">Petani/Nelayan/Supir</option>
                            <option 
                                {{  $mahasiswa->pekerjaan_ayah == '5' ? 'selected' : '' }}
                            value="5">Tukang/Tidak-Tetap/Lain-lain</option>
                            <option 
                                {{  $mahasiswa->pekerjaan_ayah == '6' ? 'selected' : '' }}
                            value="6">Pensiunan</option>
                            <option 
                                {{ $mahasiswa->pekerjaan_ayah == '7' ? 'selected' : '' }}
                            value="7">Tidak Bekerja</option>
                            <option 
                                {{ $mahasiswa->pekerjaan_ayah == '8' ? 'selected' : '' }}
                            value="8">Telah Meninggal Dunia</option>
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
                            <option 
                             {{ $mahasiswa->pekerjaan_ibu == '1' ? 'selected' : '' }}
                            value="1">PNS/TNI/POLRI/BUMN</option>
                            <option 
                             {{  $mahasiswa->pekerjaan_ibu == '2' ? 'selected' : '' }}
                            value="2">Pegawai Swasta</option>
                            <option 
                             {{  $mahasiswa->pekerjaan_ibu == '3' ? 'selected' : '' }}
                            value="3">Wiraswasta</option>
                            <option 
                             {{  $mahasiswa->pekerjaan_ibu == '4' ? 'selected' : '' }}
                            value="4">Petani/Nelayan/Supir</option>
                            <option 
                             {{  $mahasiswa->pekerjaan_ibu == '5' ? 'selected' : '' }}
                            value="5">Tukang/Tidak-Tetap/Lain-lain</option>
                            <option 
                             {{  $mahasiswa->pekerjaan_ibu == '6' ? 'selected' : '' }}
                            value="6">Pensiunan</option>
                            <option 
                             {{  $mahasiswa->pekerjaan_ibu == '7' ? 'selected' : '' }}
                            value="7">Tidak Bekerja</option>
                            <option 
                             {{  $mahasiswa->pekerjaan_ibu == '8' ? 'selected' : '' }}
                            value="8">Telah Meninggal Dunia</option>
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
                            <option 
                            {{ $mahasiswa->penghasilan_ayah == '1' ? 'selected' : '' }}
                            value="1">Lebih dari 7.000.000</option>
                            <option 
                            {{  $mahasiswa->penghasilan_ayah == '2' ? 'selected' : '' }}
                            value="2">Rp. 6.000.000 - Rp. 7.000.000</option>
                            <option 
                            {{  $mahasiswa->penghasilan_ayah == '3' ? 'selected' : '' }}
                            value="3">Rp. 5.000.000 - Rp. 5.999.999</option>
                            <option 
                            {{  $mahasiswa->penghasilan_ayah == '4' ? 'selected' : '' }}
                            value="4">Rp. 4.000.000 - Rp. 4.999.999</option>
                            <option 
                            {{  $mahasiswa->penghasilan_ayah == '5' ? 'selected' : '' }}
                            value="5">Rp. 3.000.000 - Rp. 3.999.999</option>
                            <option 
                            {{  $mahasiswa->penghasilan_ayah == '6' ? 'selected' : '' }}
                            value="6">Rp. 2.000.000 - Rp. 2.999.999</option>
                            <option 
                            {{  $mahasiswa->penghasilan_ayah == '7' ? 'selected' : '' }}
                            value="7">Rp. 1.000.000 - Rp. 1.999.999</option>
                            <option 
                            {{  $mahasiswa->penghasilan_ayah == '8' ? 'selected' : '' }}
                            value="8">Rp. 500.000 - Rp. 999.999</option>
                            <option 
                            {{  $mahasiswa->penghasilan_ayah == '9' ? 'selected' : '' }}
                            value="9">Tidak Berpenghasilan</option>
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
                            <option 
                                {{ $mahasiswa->penghasilan_ibu == '1' ? 'selected' : '' }}
                            value="1">Lebih dari 7.000.000</option>
                            <option 
                                {{  $mahasiswa->penghasilan_ibu == '2' ? 'selected' : '' }}
                            value="2">Rp. 6.000.000 - Rp. 7.000.000</option>
                            <option 
                                {{  $mahasiswa->penghasilan_ibu == '3' ? 'selected' : '' }}
                            value="3">Rp. 5.000.000 - Rp. 5.999.999</option>
                            <option 
                                {{  $mahasiswa->penghasilan_ibu == '4' ? 'selected' : '' }}
                            value="4">Rp. 4.000.000 - Rp. 4.999.999</option>
                            <option 
                                {{  $mahasiswa->penghasilan_ibu == '5' ? 'selected' : '' }}
                            value="5">Rp. 3.000.000 - Rp. 3.999.999</option>
                            <option 
                                {{  $mahasiswa->penghasilan_ibu == '6' ? 'selected' : '' }}
                            value="6">Rp. 2.000.000 - Rp. 2.999.999</option>
                            <option 
                                {{  $mahasiswa->penghasilan_ibu == '7' ? 'selected' : '' }}
                            value="7">Rp. 1.000.000 - Rp. 1.999.999</option>
                            <option 
                                {{  $mahasiswa->penghasilan_ibu == '8' ? 'selected' : '' }}
                            value="8">Rp. 500.000 - Rp. 999.999</option>
                            <option 
                                {{  $mahasiswa->penghasilan_ibu == '9' ? 'selected' : '' }}
                            value="9">Tidak Berpenghasilan</option>
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
                            <option 
                                {{  $mahasiswa->jumlah_saudara == '1' ? 'selected' : '' }}
                            value="1">Kurang dari 3 orang</option>
                            <option 
                                {{  $mahasiswa->jumlah_saudara == '2' ? 'selected' : '' }}
                            value="2">3 - 5 orang</option>
                            <option 
                                {{  $mahasiswa->jumlah_saudara == '3' ? 'selected' : '' }}
                            value="3">6 - 7 orang</option>
                            <option 
                                {{ $mahasiswa->jumlah_saudara == '4' ? 'selected' : '' }}
                            value="4">Lebih dari 7 orang</option>
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
                            <option 
                                {{  $mahasiswa->kondisi_anak == '0' ? 'selected' : '' }}
                            value="0">Tidak Yatim</option>
                            <option 
                                {{  $mahasiswa->kondisi_anak == '1' ? 'selected' : '' }}
                            value="1">Yatim</option>
                            <option 
                                {{  $mahasiswa->kondisi_anak == '2' ? 'selected' : '' }}
                            value="2">Yatim Piatu</option>
                        </select>
                        @error('jumlah_saudara')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
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