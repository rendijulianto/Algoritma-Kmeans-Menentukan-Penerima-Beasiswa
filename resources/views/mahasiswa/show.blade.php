
@extends('layouts.app')
@section('breadcrumb')
<div class="font-weight-medium shadow-none position-relative overflow-hidden mb-4">
  <div class="d-sm-flex d-block justify-content-between align-items-center">
     <h5 class="mb-0 fw-semibold text-uppercase"> 
        Kelola Mahasiswa - Detail Mahasiswa
     </h5>
  </div>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-lg-6 d-flex align-items-stretch">
    <div class="card w-100 position-relative overflow-hidden">
      <div class="card-body">
        <h5 class="card-title fw-semibold">Profile Mahasiswa</h5>
        <div class="text-center">
          <img src="{{asset('assets/images/profile/user-1.jpg')}}" alt="" class="img-fluid rounded" width="120" height="120">
          <h5 class="mt-3 mb-1">
            {{ $mahasiswa->nama }}
          </h5>
          <p class="mb-3">
            {{ $mahasiswa->jenjang_pendidikan_text }} - {{ $mahasiswa->jurusan }}
          </p>
          @if($mahasiswa->status_penerima_beasiswa == 1)
            <span class="badge bg-success">Menerima Beasiswa </span> 
            @if($mahasiswa->klaster_beasiswa == "C1")
              <span class="badge bg-danger">
                 Beasiswa RMP Bandung
              </span>
            @elseif($mahasiswa->klaster_beasiswa == "C2")
              <span class="badge bg-warning">
                 Beasiswa BNI
              </span>
            @elseif($mahasiswa->klaster_beasiswa == "C3")
              <span class="badge bg-primary">
                 Beasiswa Beasiswa YPK A & A Rachmat
              </span>
            @elseif($mahasiswa->klaster_beasiswa == "C4")
              <span class="badge bg-info">
                 Beasiswa UKT / SPP
              </span>
            @endif
          @else
            <span class="badge bg-danger">Tidak Menerima Beasiswa </span>
          @endif
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 d-flex align-items-stretch">
    <div class="card w-100 position-relative overflow-hidden">
      <div class="card-body p-4">
        <h5 class="card-title fw-semibold">
          Informasi Keluarga
        </h5>
        <p class="card-subtitle mb-4">
          Menjelaskan tentang informasi keluarga mahasiswa
        </p>
        <form>
         <div class="row">
            <div class="col-lg-6">
              <div class="mb-4">
                <label for="pekerjaan_ayah" class="form-label fw-semibold">Pekerjaan Ayah</label>
                <input type="text" readonly class="form-control" id="pekerjaan_ayah" placeholder="Pekerjaan Ayah" value="{{ $mahasiswa->pekerjaan_ayah_text }}" readonly>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-4">
                <label for="pekerjaan_ibu" class="form-label fw-semibold">Pekerjaan Ibu</label>
                <input type="text" readonly class="form-control" id="pekerjaan_ibu" placeholder="Pekerjaan Ibu" value="{{ $mahasiswa->pekerjaan_ibu_text }}" readonly>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-4">
                <label for="penghasilan_ayah" class="form-label fw-semibold">Penghasilan Ayah</label>
                <input type="text" readonly class="form-control" id="penghasilan_ayah" placeholder="Penghasilan Ayah" value="{{ $mahasiswa->penghasilan_ayah_text }}" readonly>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-4">
                <label for="penghasilan_ibu" class="form-label fw-semibold">Penghasilan Ibu</label>
                <input type="text" readonly class="form-control" id="penghasilan_ibu" placeholder="Penghasilan Ibu" value="{{ $mahasiswa->penghasilan_ibu_text }}" readonly>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-4">
                <label for="jumlah_saudara" class="form-label fw-semibold">Jumlah Saudara</label>
                <input type="text" readonly class="form-control" id="jumlah_saudara" placeholder="Jumlah Saudara" value="{{ $mahasiswa->jumlah_saudara_text }}" readonly>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-4">
                <label for="kondisi_anak" class="form-label fw-semibold">Kondisi Anak</label>
                <input type="text"  class="form-control" id="kondisi_anak" placeholder="Kondisi Anak" value="{{ $mahasiswa->kondisi_anak_text }}" readonly>
              </div>
            </div>
         </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-12">
    <div class="card w-100 position-relative overflow-hidden mb-0">
      <div class="card-body p-4">
        <h5 class="card-title fw-semibold">
          Informasi Tambahan Mahasiswa
        </h5>
        <p class="card-subtitle mb-4">To change your personal detail , edit and save from here</p>
        <form>
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-4">
                <label for="exampleInputtext" class="form-label fw-semibold">IPK</label>
                <input type="text" readonly class="form-control" id="exampleInputtext" placeholder="IPK" value="{{ $mahasiswa->ipk_text }}" readonly>
              </div>
            </div>
            {{-- aktif_organisasi --}}
            <div class="col-lg-6">
              <div class="mb-4">
                <label for="exampleInputtext" class="form-label fw-semibold">Aktif Organisasi</label>
                <input type="text" readonly class="form-control" id="exampleInputtext" placeholder="Aktif Organisasi" value="{{ $mahasiswa->aktif_organisasi_text }}" readonly>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-4">
                <label for="semester" class="form-label fw-semibold">Semester</label>
                <input type="text" readonly class="form-control" id="semester" placeholder="Semester" value="{{ $mahasiswa->semester_text }}" readonly>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-4">
                <label for="sedang_menerima_beasiswa" class="form-label fw-semibold">Sedang Menerima Beasiswa</label>
                <input type="text" readonly class="form-control" id="sedang_menerima_beasiswa" placeholder="Sedang Menerima Beasiswa" value="{{ $mahasiswa->sedang_menerima_beasiswa_text }}" readonly>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-4">
                <label for="domisili" class="form-label fw-semibold">Domisili</label>
                <input type="text" readonly class="form-control" id="domisili" placeholder="Domisili" value="{{ $mahasiswa->domisili_text }}" readonly>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-4">
                <label for="tunggakan" class="form-label fw-semibold">Tunggakan</label>
                <input type="text" readonly class="form-control" id="tunggakan" placeholder="Tunggakan" value="{{ $mahasiswa->tunggakan_text }}" readonly>
              </div>
            </div>
            <div class="col-12">
              <div class="d-flex align-items-center justify-content-end mt-4 gap-3">
                <button class="btn btn-primary">Kembali</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection