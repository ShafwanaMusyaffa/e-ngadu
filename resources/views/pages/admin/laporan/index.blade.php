@extends('layouts.admin')

@section('judul')
    Data Pengaduan
@endsection

@section('content')
  <button class="btn bg-primary">Export ke PDF</button>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Data Laporan</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class="text-primary">
                <th>NIK</th>
                <th>Nama</th>
                <th>Pengaduan</th>
                <th>Tanggal</th>
                <th>Status</th>
              </thead>
              <tbody>
                <tr>
                  <td>1209310930129301</td>
                  <td>Niger</td>
                  <td>ADMIN</td>
                  <td>ADMIN</td>
                  <td>ADMIN</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection