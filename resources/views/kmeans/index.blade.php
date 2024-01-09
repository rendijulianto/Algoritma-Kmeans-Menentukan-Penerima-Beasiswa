@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">Mahasiswa</h3>
            <div class="widget-content searchable-container list">
                <div class="card card-body">
                  <div class="alert alert-danger">
                    <h4 class="alert-heading">Peringatan!</h4>
                    <p class="mb-0">
                      <strong>Perhatian!</strong> Pastikan data mahasiswa sudah diimport sebelum melakukan proses k-means.
                    </p>
                  </div>
                  {{-- table centroid iterasi ke $step --}}
                  <div class="table-responsive">
                    <table class="table search-table v-middle">
                      <thead class="header-item">
                        <th> Cluster 1</th>
                        <th class="font-weight-medium fs-4">
                          C. Pekerjaan Ayah
                        </th>
                        <th class="font-weight-medium fs-4">
                          C. Pekerjaan Ibu
                        </th>
                        <th class="font-weight-medium fs-4">
                          C. Penghasilan Ayah
                        </th>
                        <th class="font-weight-medium fs-4">
                          C. Penghasilan Ibu
                        </th>
                        <th class="font-weight-medium fs-4">
                          C. Jumlah Saudara
                        </th>
                        <th class="font-weight-medium fs-4">
                          C. Kondisi Anak
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                            <td> <span class="badge bg-success">C1</span></td>
                            <td>{{$centroid['centroid_1']['pekerjaan_ayah']}}</td>
                            <td>{{$centroid['centroid_1']['pekerjaan_ibu']}}</td>
                            <td>{{$centroid['centroid_1']['penghasilan_ayah']}}</td>
                            <td>{{$centroid['centroid_1']['penghasilan_ibu']}}</td>
                            <td>{{$centroid['centroid_1']['jumlah_saudara']}}</td>
                            <td>{{$centroid['centroid_1']['kondisi_anak']}}</td>
                        </tr>
                        <tr>
                            <td> <span class="badge bg-warning">C2</span></td>
                            <td>{{$centroid['centroid_2']['pekerjaan_ayah']}}</td>
                            <td>{{$centroid['centroid_2']['pekerjaan_ibu']}}</td>
                            <td>{{$centroid['centroid_2']['penghasilan_ayah']}}</td>
                            <td>{{$centroid['centroid_2']['penghasilan_ibu']}}</td>
                            <td>{{$centroid['centroid_2']['jumlah_saudara']}}</td>
                            <td>{{$centroid['centroid_2']['kondisi_anak']}}</td>
                        </tr>
                        <tr>
                            <td> <span class="badge bg-danger">C3</span></td>
                            <td>{{$centroid['centroid_3']['pekerjaan_ayah']}}</td>
                            <td>{{$centroid['centroid_3']['pekerjaan_ibu']}}</td>
                            <td>{{$centroid['centroid_3']['penghasilan_ayah']}}</td>
                            <td>{{$centroid['centroid_3']['penghasilan_ibu']}}</td>
                            <td>{{$centroid['centroid_3']['jumlah_saudara']}}</td>
                            <td>{{$centroid['centroid_3']['kondisi_anak']}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                
                  <div class="table-responsive">
                    <table class="table search-table v-middle">
                      <thead class="header-item">
                    
                        <th class="font-weight-medium fs-4">Nama</th>
                        
                        <th class="font-weight-medium fs-4">C1</th>
                        <th class="font-weight-medium fs-4">C2</th>
                        <th class="font-weight-medium fs-4">C3</th>
                        <th class="font-weight-medium fs-4">Cluster</th>
                      </thead>
                      <tbody>
                       @forelse ($mahasiswa as $mhs)
                        <!-- row -->
                        <tr class="search-items">
                        
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
                          </div>
                       </div>
                        </td>
                           
                            @php 
                        
                              $c1 = euclideanDistance($centroid['centroid_1'], $mhs);
                              $c2 = euclideanDistance($centroid['centroid_2'], $mhs);
                              $c3 = euclideanDistance($centroid['centroid_3'], $mhs);
                              $cluster = cluster($c1, $c2, $c3);
                            @endphp
                           <td>
                              {{$c1}}
                           </td>
                            <td>
                                {{$c2}}
                            </td>
                            <td>
                                {{$c3}}
                            </td>
                            <td>
                                {{$cluster}}
                            </td>
                          </tr>
                          <!-- /.row -->
                          <?php 
                            $hasil_iterasi = DB::table('hasil_iterasi')->insert([
                              'iterasi' => $step,
                              'mahasiswa_id' => $mhs->id,
                              'c1' => $c1,
                              'c2' => $c2,
                              'c3' => $c3,
                              'rata_rata' => $cluster,
                            ]);
                            if($cluster == 'C1'){
                           
                              $hasil_cluster = DB::table('hasil_centroid')->updateOrInsert(
                                [
                                  'iterasi' => $step,
                                  'c1a' => $mhs->pekerjaan_ayah,
                                  'c1b' => $mhs->pekerjaan_ibu,
                                  'c1c' => $mhs->penghasilan_ayah,
                                  'c1d' => $mhs->penghasilan_ibu,
                                  'c1e' => $mhs->jumlah_saudara,
                                  'c1f' => $mhs->kondisi_anak,
                                  'mahasiswa_id' => $mhs->id
                                ],
                                ['c1a' => $mhs->pekerjaan_ayah,
                                'c1b' => $mhs->pekerjaan_ibu,
                                'c1c' => $mhs->penghasilan_ayah,
                                'c1d' => $mhs->penghasilan_ibu,
                                'c1e' => $mhs->jumlah_saudara,
                                'c1f' => $mhs->kondisi_anak,
                                'iterasi' => $step,
                                'mahasiswa_id' => $mhs->id
                                ]
                              );
                            } elseif($cluster == 'C2'){
                              $hasil_cluster = DB::table('hasil_centroid')->updateOrInsert(
                                [
                                  'iterasi' => $step,
                                  'c2a' => $mhs->pekerjaan_ayah,
                                  'c2b' => $mhs->pekerjaan_ibu,
                                  'c2c' => $mhs->penghasilan_ayah,
                                  'c2d' => $mhs->penghasilan_ibu,
                                  'c2e' => $mhs->jumlah_saudara,
                                  'c2f' => $mhs->kondisi_anak,
                                  'mahasiswa_id' => $mhs->id
                                ],
                                ['c2a' => $mhs->pekerjaan_ayah,
                                'c2b' => $mhs->pekerjaan_ibu,
                                'c2c' => $mhs->penghasilan_ayah,
                                'c2d' => $mhs->penghasilan_ibu,
                                'c2e' => $mhs->jumlah_saudara,
                                'c2f' => $mhs->kondisi_anak,
                                'iterasi' => $step,
                                'mahasiswa_id' => $mhs->id
                                ]
                              );
                            } elseif($cluster == 'C3'){
                              $hasil_cluster = DB::table('hasil_centroid')->updateOrInsert(
                                [
                                  'iterasi' => $step,
                                  'c3a' => $mhs->pekerjaan_ayah,
                                  'c3b' => $mhs->pekerjaan_ibu,
                                  'c3c' => $mhs->penghasilan_ayah,
                                  'c3d' => $mhs->penghasilan_ibu,
                                  'c3e' => $mhs->jumlah_saudara,
                                  'c3f' => $mhs->kondisi_anak,
                                  'mahasiswa_id' => $mhs->id
                                ],
                                ['c3a' => $mhs->pekerjaan_ayah,
                                'c3b' => $mhs->pekerjaan_ibu,
                                'c3c' => $mhs->penghasilan_ayah,
                                'c3d' => $mhs->penghasilan_ibu,
                                'c3e' => $mhs->jumlah_saudara,
                                'c3f' => $mhs->kondisi_anak,
                                'iterasi' => $step,
                                'mahasiswa_id' => $mhs->id
                                ]
                              );
                            }
                          ?>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center">Data Kosong</td>    
                            </tr>
                        @endforelse
                        
                          @if($stop)
                            <tr>
                              <td colspan="9" class="text-center">
                                <div class="alert alert-success">
                                  <h4 class="alert-heading">Proses Selesai!</h4>
                                  <p class="mb-0">
                                    <strong>Perhatian!</strong> Proses k-means telah selesai dilakukan.
                                  </p>
                                </div>
                              </td>    
                            </tr>
                            
                            <tr>
                              <td colspan="9" class="text-center">
                                <a href="{{route('kmeans.index', ['step' => 0])}}" class="btn btn-primary">Kembali ke Awal</a>
                              </td>
                            </tr>
                          
                          @else
                          
                          @if($step > 1)
                          <tr>
                            <td colspan="4" class="text-center">
                              <a href="{{route('kmeans.index', ['step' => $step - 1])}}" class="btn btn-primary">Kembali</a>
                            </td>
                              
                            @endif
                            <td colspan="5" class="text-center">
                              <a href="{{route('kmeans.index', ['step' => $step + 1])}}" class="btn btn-primary">Lanjutkan Proses</a>
                             </td>    
                          </tr>

                          @endif
                      </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>

    </div>
    @if($stop)
    <div class="col-md-12">
      <div class="white-box">
          <h3 class="box-title">Mahasiswa</h3>
          <div class="widget-content searchable-container list">
              <div class="card card-body">
                <div class="alert alert-info">
                  <h4 class="alert-heading">Informasi!</h4>
                  <p class="mb-0">
                    <strong>Perhatian!</strong> Berikut adalah hasil cluster dari proses k-means.
                  </p>
                </div>
              
                <div class="table-responsive">
                  <table class="table search-table v-middle">
                    <thead class="header-item">
          
                      <th class="font-weight-medium fs-4">Nama</th>
                      <th class="font-weight-medium fs-4">Pekerjaan Ayah</th>
                        <th class="font-weight-medium fs-4">Pekerjaan Ibu</th>
                        <th class="font-weight-medium fs-4">Jumlah Saudara</th>
                        <th class="font-weight-medium fs-4">Kondisi Anak</th>
                        <th class="font-weight-medium fs-4">Cluster</th>
                    </thead>
                    <tbody>
                     @forelse ($mahasiswa as $mhs)
                      <!-- row -->
                      <tr class="search-items">
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
                              </div>
                           </div>
                          </td>
                         <?php 
                          $hasil_iterasi = DB::table('hasil_iterasi')->where('mahasiswa_id', $mhs->id)->where('iterasi', $step)->first();
                          $c1 = $hasil_iterasi->c1;
                          $c2 = $hasil_iterasi->c2;
                          $c3 = $hasil_iterasi->c3;
                          $cluster = $hasil_iterasi->rata_rata;
                          ?>
                          <td>
                            {{$mhs->pekerjaan_ayah_text}} <br />
                            {{$mhs->penghasilan_ayah_text}}
                          </td>
                          <td>
                              {{$mhs->pekerjaan_ibu_text}} <br />
                              {{$mhs->penghasilan_ibu_text}}
                          </td>
                          
                          <td>
                              {{$mhs->jumlah_saudara_text}}
                          </td>
                          <td>
                              {{$mhs->kondisi_anak_text}}
                          </td>
                          <td>
                              @if($cluster == 'C1')
                                <span class="badge bg-success">C1</span>
                              @elseif($cluster == 'C2')
                                <span class="badge bg-warning">C2</span>
                              @elseif($cluster == 'C3')
                                <span class="badge bg-danger">C3</span>
                              @endif
                          </td>

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
                </div>
              </div>
          </div>
      </div>
  </div>
    @endif
</div>
@endsection