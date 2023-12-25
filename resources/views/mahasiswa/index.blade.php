@extends('layouts.app')
@section('breadcrumb')
<div class="page-breadcrumb bg-white">
  <div class="row align-items-center">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title">Blank Page</h4>
      </div>
      <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <div class="d-md-flex">
              <ol class="breadcrumb ms-auto">
                  <li><a href="#" class="fw-normal">Dashboard</a></li>
              </ol>
              <a href="https://www.wrappixel.com/templates/ampleadmin/" target="_blank"
                  class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Upgrade
                  to Pro</a>
          </div>
      </div>
  </div>
  <!-- /.col-lg-12 -->
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">Mahasiswa</h3>
            <div class="widget-content searchable-container list">
                <div class="card card-body">
                  <div class="table-responsive">
                    <table class="table search-table v-middle">
                      <thead class="header-item">
                        <th>
                          <div class="n-chk align-self-center text-center">
                           <b>No</b>
                          </div>
                        </th>
                        <th class="font-weight-medium fs-4">Nama</th>
                        <th class="font-weight-medium fs-4">Pekerjaan Ayah</th>
                        <th class="font-weight-medium fs-4">Pekerjaan Ibu</th>
                        <th class="font-weight-medium fs-4">Penghasilan Ayah</th>
                        <th class="font-weight-medium fs-4">Penghasilan Ibu</th>
                        <th class="font-weight-medium fs-4">Jumlah Saudara</th>
                        <th class="font-weight-medium fs-4">Kondisi Anak</th>
                      </thead>
                      <tbody>
                       @forelse ($mahasiswa as $mhs)
                            <!-- row -->
                        <tr class="search-items">
                            <td>
                              <div class="n-chk align-self-center text-center">
                                <b>{{ $mahasiswa->firstItem() + $loop->iteration - 1 }}</b>
                              </div>
                            </td>
                            <td>
                              <div class="d-flex align-items-center">
                                <span
                                  class="
                                    round
                                    rounded-circle
                                    text-white
                                    d-inline-block
                                    text-center
                                    bg-info
                                  "
                                  >{{ substr($mhs->nama, 0, 1) }}</span
                                >
                                <div class="ms-3">
                                  <div class="user-meta-info">
                                    <h5 class="user-name mb-0" data-name="{{ $mhs->nama }}">{{ $mhs->nama }}</h5>
                                      
                                    <small
                                      class="user-work text-muted"
                                      data-occupation="Web Developer"
                                      >{{$mhs->jurusan}}</small
                                    >
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td>
                              {{$mhs->pekerjaan_ayah_text}}
                            </td>
                            <td>
                                {{$mhs->pekerjaan_ibu_text}}
                            </td>
                            <td>
                                {{$mhs->penghasilan_ayah_text}}
                            </td>
                            <td>
                                {{$mhs->penghasilan_ibu_text}}
                            </td>
                            <td>
                                {{$mhs->jumlah_saudara_text}}
                            </td>
                            <td>
                                {{$mhs->kondisi_anak_text}}
                            </td>
                          </tr>
                          <!-- /.row -->
                        @empty
                            <tr>
                                <td colspan="9" class="text-center">Data Kosong</td>    
                            </tr>
                        @endforelse

                      
                      </tbody>
                    </table>
                    {{ $mahasiswa->withQueryString()->links('pagination::bootstrap-4') }}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection