@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card overflow-hidden w-100">
          <h5 class="card-title mb-0 text-white bg-primary px-9 pt-9">Grafik</h5>
          <div class="bg-primary">
            <div class="demo-container mt-4" style="height: 135px">
              <div id="grafik" class="demo-placeholder"></div>
            </div>
          </div>
          <div class="d-flex align-items-center p-4 border-bottom">
            <div>
              <h2 class="fw-medium">
                 {{number_format($total,0,',','.')}}
              </h2>
              <div class="card-subtitle mb-0">
                Total Mahasiswa
              </div>
            </div>
            <div class="ms-auto">
              <form action="{{ route('dashboard.reset-iterasi') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Reset</button>
            </div>
          </div>
          <div class="row no-gutters">
            <div class="col-md-6 border-end border-bottom">
              <div class="d-flex align-items-center px-4 py-3 gap-3">
                <iconify-icon icon="solar:home-line-duotone"
                  class="iconify-lg icon-center text-secondary"></iconify-icon>
                <div>
                  <h3 class="fw-normal mb-1">
                     {{number_format($total_rektor_unikom,0,',','.')}}
                  </h3>
                  <h4 class="text-muted fw-normal mb-0">
                    Rektor Unikom
                  </h4>
                </div>
              </div>
            </div>
            <div class="col-md-6 border-end border-bottom">
              <div class="d-flex align-items-center px-4 py-3 gap-3">
                <iconify-icon icon="solar:home-line-duotone"
                  class="iconify-lg icon-center text-secondary"></iconify-icon>
                <div>
                  <h3 class="fw-normal mb-1">
                    {{$total_bni}} 
                    </h3>
                  <h4 class="text-muted fw-normal mb-0">
                    BNI
                  </h4>
                </div>
              </div>
            </div>

            <div class="col-md-6 border-end ">
              <div class="d-flex align-items-center px-4 py-3 gap-3">
                <iconify-icon icon="solar:plain-linear"
                  class="iconify-lg icon-center text-secondary"></iconify-icon>
                <div>
                  <h3 class="fw-normal mb-1">
                     {{number_format($total_ypk,0,',','.')}}
                  </h3>
                  <h4 class="text-muted fw-normal mb-0">
                    Yayasan Pelayanan Kasih
                  </h4>
                </div>
              </div>
            </div>
            {{-- $total_pemkot_bandung = $mahasiswa->where('tipe_beasiswa', 'Pemkot Bandung')->count(); --}}
            <div class="col-md-6 border-end ">
                <div class="d-flex align-items-center px-4 py-3 gap-3">
                  <iconify-icon icon="solar:plain-linear"
                    class="iconify-lg icon-center text-secondary"></iconify-icon>
                  <div>
                    <h3 class="fw-normal mb-1">
                          {{number_format($total_pemkot_bandung,0,',','.')}}
                    </h3>
                    <h4 class="text-muted fw-normal mb-0">
                        Pemkot Bandung
                    </h4>
                  </div>
                </div>
            </div>
            {{-- $total_ukt = $mahasiswa->where('tipe_beasiswa', 'UKT')->count(); --}}
            <div class="col-md-6 border-end ">
                <div class="d-flex align-items-center px-4 py-3 gap-3">
                  <iconify-icon icon="solar:plain-linear"
                    class="iconify-lg icon-center text-secondary"></iconify-icon>
                  <div>
                    <h3 class="fw-normal mb-1">
                        {{number_format($total_ukt,0,',','.')}}
                    </h3>
                    <h4 class="text-muted fw-normal mb-0">
                        UKT 
                    </h4>
                  </div>
                </div>
              </div>
            {{-- $total_ys = $mahasiswa->where('tipe_beasiswa', 'Yayasan Science')->count(); --}}
            <div class="col-md-6 border-end ">
                <div class="d-flex align-items-center px-4 py-3 gap-3">
                  <iconify-icon icon="solar:plain-linear"
                    class="iconify-lg icon-center text-secondary"></iconify-icon>
                  <div>
                    <h3 class="fw-normal mb-1">
                        {{number_format($total_ys,0,',','.')}}
                    </h3>
                    <h4 class="text-muted fw-normal mb-0">
                        Yayasan Science
                    </h4>
                  </div>
                </div>
              </div>
            <div class="col-md-12 border-end ">
                <div class="d-flex align-items-center px-4 py-3 gap-3">
                  <iconify-icon icon="solar:plain-linear"
                    class="iconify-lg icon-center text-secondary"></iconify-icon>
                  <div>
                    <h3 class="fw-normal mb-1">
                        {{number_format($total_tidak,0,',','.')}}
                    </h3>
                    <h4 class="text-muted fw-normal mb-0">
                        Tidak menerima beasiswa
                    </h4>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    <div class="col-lg-12">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Detail</h5>
                <div class="table-responsive">
                    <table class="table no-wrap user-table mb-0">
                        {{-- $daftar_mahasiswa = [];
                        foreach ($daftar_beasiswa as $beasiswa) {
                            $daftar_mahasiswa[$beasiswa] = $mahasiswa->where('tipe_beasiswa', $beasiswa);
                        } --}}
                        <tbody>
                           @foreach ($daftar_mahasiswa as $key => $item)
                                <tr>
                                    <td colspan="4" 
                                        class="text-center font-weight-bold text-uppercase" style="font-size: 1.2rem">
                                        {{ $key == '-' ? 'Tidak menerima beasiswa' : $key }}
                                    </td>
                                </tr>
                                <tr class="bg-dark" style="color: white">
                                    <td>No</td>
                                    <td>Nama</td>
                                    <td>Jurusan</td>
                                    <td></td>
                                </tr>
                                @forelse ($item as $mahasiswa)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $mahasiswa->nama }}</td>
                                        <td>{{ $mahasiswa->jurusan }}</td>
                                        <td class="text-right">
                                            <a href="{{ route('mahasiswa.show', $mahasiswa->id) }}" class="btn btn-sm btn-primary">Detail</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Tidak ada data</td>
                                    </tr>
                                @endforelse
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
@section('script')
<script src="{{asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
<script>
    // -------------------------------------------------------------------------------------------------------------------------------------------
// Dashboard 2 : Chart Init Js
// -------------------------------------------------------------------------------------------------------------------------------------------
$(function () {
  "use strict";


  var option_Expense = {
    series: [
    
      {
        name: "",
        data: {{json_encode($data_grafik)}}
      },
    ],

    labels: {!! json_encode($daftar_beasiswa) !!},
    chart: {
      fontFamily: "inherit",
      height: 135,
      type: "area",
      // stacked: true,
      foreColor: '#adb0bb',
      toolbar: {
        show: false,
      },
      sparkline: {
        enabled: true
      }
    },
    colors: ["rgba(255,255,255,0.8)", "rgba(255,255,255,0.3)"],
    stroke: {
      curve: 'smooth',
      width: 2
    },
    fill: {
      type: 'gradient',
      gradient: {
        colors: '#fff',
        opacityFrom: 0.08,
        opacityTo: 0.03,
      }
    },
    grid: {
      show: true,
      borderColor: "rgba(255,255,255,0.3)",
      strokeDashArray: 4,
      xaxis: {
        lines: {
          show: false,
        },
      },
      yaxis: {
        lines: {
          show: true,
        },
      },
    },
    dataLabels: {
      enabled: false
    },
    legend: {
      show: false
    },
    xaxis: {
      axisBorder: {
        show: true
      },
      axisTicks: {
        show: false
      }
    },
    tooltip: {
      theme: "dark",
    },
    legend: {
      show: false,
    },
  };

  var chart_area_Expense = new ApexCharts(
    document.querySelector("#grafik"),
    option_Expense
  );
  chart_area_Expense.render();
});
</script>
@endsection