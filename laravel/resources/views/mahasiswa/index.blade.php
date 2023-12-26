@extends('layouts.app')
@section('breadcrumb')
<div class="font-weight-medium shadow-none position-relative overflow-hidden mb-4">
  <div class="d-sm-flex d-block justify-content-between align-items-center">
     <h5 class="mb-0 fw-semibold text-uppercase"> 
        Kelola Mahasiswa
     </h5>
  </div>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
     <div class="card">
        <div class="card-body">
           <h5 class="card-title mb-0">Mahasiswa</h5>
           <a  class="btn btn-primary float-end" href="{{route('mahasiswa.create')}}">
               <iconify-icon icon="akar-icons:plus" class="iconify-md"></iconify-icon>
            Tambah Mahasiswa
           </a>
        </div>
        <div class="table-responsive">
           <table class="table no-wrap user-table mb-0">
              <thead>
                 <tr>
                    <th
                       scope="col"
                       class="border-0  ps-4"
                       >
                       #
                    </th>
                    <th scope="col" class="border-0 ">
                        Nama
                    </th>
                    <th scope="col" class="border-0 ">
                       Pekerjaan Ayah
                    </th>
                    <th scope="col" class="border-0 ">
                        Pekerjaan Ibu
                    </th>
                    {{-- <th scope="col" class="border-0 ">
                        Penghasilan Ayah
                    </th>
                    <th scope="col" class="border-0 ">
                        Penghasilan Ibu
                    </th> --}}
                    <th scope="col" class="border-0 ">
                        Jumlah Saudara
                    </th>
                    <th scope="col" class="border-0 ">
                        Kondisi Anak
                    </th>
                    <th scope="col" class="border-0 ">
                       Manage
                    </th>
                 </tr>
              </thead>
              <tbody>
                @forelse($mahasiswa as $mhs)
                <tr>
                  <td class="ps-4">{{$mhs->id}}</td>
                  <td>
                     <div class="d-flex align-items-center">
                        <img
                           src="{{asset('assets/images/profile/user-1.jpg')}}"
                           class="rounded  round-50"
                           />
                        <div class="ms-3">
                           <h6 class=" mb-0">
                              {{$mhs->nama}}
                           </h6>
                           <span class="text-muted"
                              >{{$mhs->jurusan}}
                              </span
                              >
                           <br />
                           @if($mhs->status_penerima_beasiswa == 1)
                              <span class="badge bg-success">Menerima Beasiswa </span> 
                           @else
                              <span class="badge bg-danger">Tidak Menerima Beasiswa </span>
                           @endif
                        </div>
                     </div>
                  </td>
                  <td>
                     <span>
                        {{$mhs->pekerjaan_ayah_text}}
                     </span> <br />
                     <span>
                        {{$mhs->penghasilan_ayah_text}}
                      </span>
                  </td>
                  <td>
                      <span>
                          {{$mhs->pekerjaan_ibu_text}}
                      </span> <br />
                      <span>
                          {{$mhs->penghasilan_ibu_text}}
                      </span>
                  </td>
         
                
                  <td>
                      <span>
                          {{$mhs->jumlah_saudara_text}}
                      </span>
                  </td>
                  <td>
                      <span>
                          {{$mhs->kondisi_anak_text}}
                      </span>
                  </td>
                  <td>
                  
                     <a href="{{route('mahasiswa.edit', $mhs->id)}}" class="text-dark edit">
                        <iconify-icon icon="solar:pen-bold" class="iconify-md"></iconify-icon>
                     </a>
                     <form action="{{route('mahasiswa.destroy', $mhs->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                       {{-- confirm --}}
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-link text-danger" type="submit">
                           <iconify-icon icon="solar:trash-bin-2-bold" class="iconify-md"></iconify-icon>
                        </button>
                      </form>
                      <a href="{{route('mahasiswa.show', $mhs->id)}}" class="text-dark edit">
                        <iconify-icon icon="solar:eye-bold" class="iconify-md"></iconify-icon>
                     </a>
                  </td>
                  </td>
               </tr>
                @empty 
                <tr>
                    <td colspan="9" class="text-center">Data Kosong</td>
                </tr>
                @endforelse
        
              </tbody>
           </table>
          </div>
        </div>
        {{$mahasiswa->withQueryString()->links('pagination::bootstrap-4')}}
  </div>
</div>
@endsection