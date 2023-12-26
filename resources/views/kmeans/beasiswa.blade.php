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
                
                  <div class="table-responsive">
                    <table class="table search-table v-middle">
                      <thead class="header-item">
                        <th>
                          <div class="n-chk align-self-center text-center">
                            <div class="form-check">
                              <input
                                type="checkbox"
                                class="form-check-input secondary"
                                id="contact-check-all"
                              />
                              <label
                                class="form-check-label"
                                for="contact-check-all"
                              ></label>
                              <span class="new-control-indicator"></span>
                            </div>
                          </div>
                        </th>
                        <th class="font-weight-medium fs-4">Nama</th>
                        
                        <th class="font-weight-medium fs-4">C1</th>
                        <th class="font-weight-medium fs-4">C2</th>
                        <th class="font-weight-medium fs-4">C3</th>
                        <th class="font-weight-medium fs-4">C4</th>
                        <th class="font-weight-medium fs-4">Cluster</th>
                      </thead>
                      <tbody>
                       @forelse ($mahasiswa as $mhs)
                        <!-- row -->
                        <tr class="search-items">
                            <td>
                              <div class="n-chk align-self-center text-center">
                                <div class="form-check">
                                  <input
                                    type="checkbox"
                                    class="form-check-input contact-chkbox primary"
                                    id="checkbox1"
                                  />
                                  <label
                                    class="form-check-label"
                                    for="checkbox1"
                                  ></label>
                                </div>
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
                           
                            @php 
                        
                              $c1 = euclideanDistanceBeasiswa($centroid['centroid_1'], $mhs);
                              $c2 = euclideanDistanceBeasiswa($centroid['centroid_2'], $mhs);
                              $c3 = euclideanDistanceBeasiswa($centroid['centroid_3'], $mhs);
                              $c4 = euclideanDistanceBeasiswa($centroid['centroid_4'], $mhs);
                              $cluster = clusterBeasiswa($c1, $c2, $c3, $c4);
                              
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
                                {{$c4}}
                            </td>
                            <td>
                                {{$cluster}}
                            </td>
                          </tr>
                          <!-- /.row -->
                          <?php 
                            
                            $hasil_iterasi = DB::table('hasil_iterasi_beasiswa')->insert([
                              'iterasi' => $step,
                              'mahasiswa_id' => $mhs->id,
                              'c1' => $c1,
                              'c2' => $c2,
                              'c3' => $c3,
                              'c4' => $c4,
                              'cluster' => $cluster,
                            ]);
                         
                            if($cluster == 'C1'){
                           
                              $hasil_cluster = DB::table('hasil_centroid_beasiswa')->updateOrInsert(
                                [
                                  'iterasi' => $step,
                                  'c1a' => $mhs->jenjang_pendidikan,
                                  'c1b' => $mhs->ipk,
                                  'c1c' => $mhs->aktif_organisasi,
                                  'c1d' => $mhs->semester,
                                  'c1e' => $mhs->sedang_menerima_beasiswa,
                                  'c1f' => $mhs->domisili,
                                  'c1g' => $mhs->tunggakan,
                                
                                  'mahasiswa_id' => $mhs->id
                                ],
                                [
                                'c1a' => $mhs->jenjang_pendidikan,
                                'c1b' => $mhs->ipk,
                                'c1c' => $mhs->aktif_organisasi,
                                'c1d' => $mhs->semester,
                                'c1e' => $mhs->sedang_menerima_beasiswa,
                                'c1f' => $mhs->domisili,
                                'c1g' => $mhs->tunggakan,
                                'iterasi' => $step,
                                'mahasiswa_id' => $mhs->id
                                ]
                              );
                            } elseif($cluster == 'C2'){
                              $hasil_cluster = DB::table('hasil_centroid_beasiswa')->updateOrInsert(
                                [
                                  'iterasi' => $step,
                                    'c2a' => $mhs->jenjang_pendidikan,
                                    'c2b' => $mhs->ipk,
                                    'c2c' => $mhs->aktif_organisasi,
                                    'c2d' => $mhs->semester,
                                    'c2e' => $mhs->sedang_menerima_beasiswa,
                                    'c2f' => $mhs->domisili,
                                    'c2g' => $mhs->tunggakan,
                                  'mahasiswa_id' => $mhs->id
                                ],
                                [ 'c2a' => $mhs->jenjang_pendidikan,
                                    'c2b' => $mhs->ipk,
                                    'c2c' => $mhs->aktif_organisasi,
                                    'c2d' => $mhs->semester,
                                    'c2e' => $mhs->sedang_menerima_beasiswa,
                                    'c2f' => $mhs->domisili,
                                    'c2g' => $mhs->tunggakan,
                                'iterasi' => $step,
                                'mahasiswa_id' => $mhs->id
                                ]
                              );
                            } elseif($cluster == 'C3'){
                              $hasil_cluster = DB::table('hasil_centroid_beasiswa')->updateOrInsert(
                                [
                                  'iterasi' => $step,
                                    'c3a' => $mhs->jenjang_pendidikan,
                                    'c3b' => $mhs->ipk,
                                    'c3c' => $mhs->aktif_organisasi,
                                    'c3d' => $mhs->semester,
                                    'c3e' => $mhs->sedang_menerima_beasiswa,
                                    'c3f' => $mhs->domisili,
                                    'c3g' => $mhs->tunggakan,
                                  'mahasiswa_id' => $mhs->id
                                ],
                                ['c3a' => $mhs->jenjang_pendidikan,
                                    'c3b' => $mhs->ipk,
                                    'c3c' => $mhs->aktif_organisasi,
                                    'c3d' => $mhs->semester,
                                    'c3e' => $mhs->sedang_menerima_beasiswa,
                                    'c3f' => $mhs->domisili,
                                    'c3g' => $mhs->tunggakan,
                                'iterasi' => $step,
                                'mahasiswa_id' => $mhs->id
                                ]
                              );
                            } elseif ($cluster == 'C4'){
                              $hasil_cluster = DB::table('hasil_centroid_beasiswa')->updateOrInsert(
                                [
                                  'iterasi' => $step,
                                    'c4a' => $mhs->jenjang_pendidikan,
                                    'c4b' => $mhs->ipk,
                                    'c4c' => $mhs->aktif_organisasi,
                                    'c4d' => $mhs->semester,
                                    'c4e' => $mhs->sedang_menerima_beasiswa,
                                    'c4f' => $mhs->domisili,
                                    'c4g' => $mhs->tunggakan,
                                  'mahasiswa_id' => $mhs->id
                                ],
                                ['c4a' => $mhs->jenjang_pendidikan,
                                    'c4b' => $mhs->ipk,
                                    'c4c' => $mhs->aktif_organisasi,
                                    'c4d' => $mhs->semester,
                                    'c4e' => $mhs->sedang_menerima_beasiswa,
                                    'c4f' => $mhs->domisili,
                                    'c4g' => $mhs->tunggakan,
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
                          @php 
                           $stop = false;
                            if($step >1) {
                              $hasil_sebelumnya = DB::table('hasil_iterasi_beasiswa')->where('iterasi', $step - 1)->get();
                                        $hasil_sekarang = DB::table('hasil_iterasi_beasiswa')->where('iterasi', $step)->get();
                                        // loop untuk membandingkan hasil iterasi sebelumnya dengan hasil iterasi sekarang
                                        foreach($hasil_sebelumnya as $key => $value) {
                                            if($value->c1 != $hasil_sekarang[$key]->c1 || $value->c2 != $hasil_sekarang[$key]->c2 || $value->c3 != $hasil_sekarang[$key]->c3 || $value->c4 != $hasil_sekarang[$key]->c4) {
                                                $stop = false;
                                                break;
                                            } else {
                                                $stop = true;
                                            }
                                        }
                            }
                          @endphp
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
                                <a href="{{route('kmeans.beasiswa', ['step' => 0])}}" class="btn btn-primary">Kembali ke Awal</a>
                              </td>
                            </tr>
                          
                          @else
                          
                          @if($step > 1)
                          <tr>
                            <td colspan="4" class="text-center">
                              <a href="{{route('kmeans.beasiswa', ['step' => $step - 1])}}" class="btn btn-primary">Kembali</a>
                            </td>
                              
                            @endif
                            <td colspan="5" class="text-center">
                              <a href="{{route('kmeans.beasiswa', ['step' => $step + 1])}}" class="btn btn-primary">Lanjutkan Proses</a>
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
                      <th>
                        <div class="n-chk align-self-center text-center">
                          <div class="form-check">
                            <input
                              type="checkbox"
                              class="form-check-input secondary"
                              id="contact-check-all"
                            />
                            <label
                              class="form-check-label"
                              for="contact-check-all"
                            ></label>
                            <span class="new-control-indicator"></span>
                          </div>
                        </div>
                      </th>
                      <th class="font-weight-medium fs-4">Nama</th>
                     <th class="font-weight-medium fs-4">Jenjang Pendidikan</th>
                        <th class="font-weight-medium fs-4">IPK</th>
                        <th class="font-weight-medium fs-4">Aktif Organisasi</th>
                        <th class="font-weight-medium fs-4">Semester</th>
                        <th class="font-weight-medium fs-4">Sedang Menerima Beasiswa</th>
                        <th class="font-weight-medium fs-4">Domisili</th>
                        <th class="font-weight-medium fs-4">Tunggakan</th>
                        <th class="font-weight-medium fs-4">Cluster</th>
                    </thead>
                    <tbody>
                     @forelse ($mahasiswa as $mhs)
                      <!-- row -->
                      <tr class="search-items">
                          <td>
                            <div class="n-chk align-self-center text-center">
                              <div class="form-check">
                                <input
                                  type="checkbox"
                                  class="form-check-input contact-chkbox primary"
                                  id="checkbox1"
                                />
                                <label
                                  class="form-check-label"
                                  for="checkbox1"
                                ></label>
                              </div>
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
                         <?php 
                          $hasil_iterasi = DB::table('hasil_iterasi_beasiswa')->where('mahasiswa_id', $mhs->id)->where('iterasi', $step)->first();
                          $c1 = $hasil_iterasi->c1;
                          $c2 = $hasil_iterasi->c2;
                          $c3 = $hasil_iterasi->c3;
                          $c4 = $hasil_iterasi->c4;
                          $cluster = $hasil_iterasi->cluster;
                          ?>
                            <td>
                                {{$mhs->jenjang_pendidikan_text}}
                            </td>
                            <td>
                                {{$mhs->ipk_text}}
                            </td>
                            <td>
                                {{$mhs->aktif_organisasi_text}}
                            </td>
                            <td>
                                {{$mhs->semester_text}}
                            </td>
                            <td>
                                {{$mhs->sedang_menerima_beasiswa_text}}
                            </td>
                            <td>
                                {{$mhs->domisili_text}}
                            </td>
                            <td>
                                {{$mhs->tunggakan_text}}
                            </td>


                          <td>
                              @if($cluster == 'C1')
                                <?php 
                                //  update cluster
                                 $update_cluster = DB::table('mahasiswa')->where('id', $mhs->id)->update(
                                    ['klaster_beasiswa' => 'C1']
                                );
                                ?>
                                <span class="badge bg-success">C1</span>
                              @elseif($cluster == 'C2')
                                <span class="badge bg-warning">C2</span>
                                <?php 
                                 $update_cluster = DB::table('mahasiswa')->where('id', $mhs->id)->update(['klaster_beasiswa' => 'C2']);
                                ?>
                              @elseif($cluster == 'C3')
                                <span class="badge bg-danger">C3</span>
                                <?php 
                                //  update cluster
                                 $update_cluster = DB::table('mahasiswa')->where('id', $mhs->id)->update(['klaster_beasiswa' => 'C3']);
                                ?>
                                @elseif($cluster == 'C4')
                                <span class="badge bg-info">C4</span>
                                <?php
                                //  update cluster
                                 $update_cluster = DB::table('mahasiswa')->where('id', $mhs->id)->update(['klaster_beasiswa' => 'C4']);
                                ?>

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