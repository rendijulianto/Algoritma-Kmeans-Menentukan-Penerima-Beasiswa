@extends('layouts.app')
@section('breadcrumb')
<div class="font-weight-medium shadow-none position-relative overflow-hidden mb-4">
  <div class="d-sm-flex d-block justify-content-between align-items-center">
     <h5 class="mb-0 fw-semibold text-uppercase"> 
        Init K-Means
     </h5>
  </div>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12">
     <div class="card">
        <div class="card-body">
           <h5 class="card-title mb-0">Init K-Means</h5>
            <div class="alert alert-info mt-4" role="alert">
                <h4 class="alert-heading">Perhatian!</h4>
                <p>
                   Centroid Awal akan diambil secara random dari data mahasiswa yang ada atau bisa diatur secara manual.
                </p>
            </div>

          <div class="row">
            <div class="col-12">
                <div class="mb-4">
                    <label for="jurusan" class="form-label fw-semibold">
                        Centroid Awal
                    </label>
                    <select class="form-select" aria-label="Default select example" id="centroid">
                        <option selected disabled>Pilih Centroid Awal</option>
                        <option value="random">Random</option>
                        <option value="manual">Manual</option>
                    </select>
                </div>
            </div>
            {{-- hidden form --}}
            {{-- input table --}}
            <div class="col-12" id="manual" style="display: none;">
                <div class="mb-4">
                    <label for="jurusan" class="form-label fw-semibold">
                        Centroid Awal
                    </label>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Centroid 1</th>
                                <th scope="col">Centroid 2</th>
                                <th scope="col">Centroid 3</th>
                                <th scope="col">Centroid 4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                   <select class="form-select" aria-label="Default select example" id="centroid1" name="centroid1">
                                        <option selected disabled>Pilih Centroid 1</option>
                                        @foreach($mahasiswa as $mhs)
                                            <option value="{{$mhs->id}}">{{$mhs->nama}}</option>
                                        @endforeach
                                    </select>

                                </td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" id="centroid2" name="centroid2">
                                        <option selected disabled>Pilih Centroid 2</option>
                                        @foreach($mahasiswa as $mhs)
                                            <option value="{{$mhs->id}}">{{$mhs->nama}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" id="centroid3" name="centroid3">
                                        <option selected disabled>Pilih Centroid 3</option>
                                        @foreach($mahasiswa as $mhs)
                                            <option value="{{$mhs->id}}">{{$mhs->nama}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select" aria-label="Default select example" id="centroid4" name="centroid4">
                                        <option selected disabled>Pilih Centroid 4</option>
                                        @foreach($mahasiswa as $mhs)
                                            <option value="{{$mhs->id}}">{{$mhs->nama}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12">
                <a  class="btn btn-info float-end" onclick="next()">
                    Lanjutkan
                </a>
            </div>
          </div>
        </div>
     </div>
  </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        $('#centroid').change(function(){
            var centroid = $(this).val();
            if(centroid == 'manual'){
                $('#manual').show();
            }else{
                $('#manual').hide();
            }
        });

    });
    const next = () => {
            var centroid = $('#centroid').val();
            var centroid1 = $('#centroid1').val();
            var centroid2 = $('#centroid2').val();
            var centroid3 = $('#centroid3').val();
            var centroid4 = $('#centroid4').val();
            if(centroid == 'manual'){
                if(centroid1 == null || centroid2 == null || centroid3 == null || centroid4 == null){
                    alert('Centroid tidak boleh kosong');
                }else{
                    window.location.href = "{{route('kmeans.beasiswa')}}?centroid1="+centroid1+"&centroid2="+centroid2+"&centroid3="+centroid3+"&centroid4="+centroid4+"&step=1";
                }
            }else{
                window.location.href = "{{route('kmeans.beasiswa')}}?centroid=random&step=1";
            }
        }
</script>
@endsection