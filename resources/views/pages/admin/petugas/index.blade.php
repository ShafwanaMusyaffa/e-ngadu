@extends('layouts.admin')

@section('judul')
    Data Pengaduan
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Data Petugas</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class="text-primary">
                <th>NIK</th>
                <th>Nama</th>
                <th>No. HP</th>
                <th>Email</th>
                <th>Role</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <tr>
                  <td>1209310930129301</td>
                  <td>Niger</td>
                  <td>082112956828</td>
                  <td>ishafwana@gmail.com</td>
                  <td>ADMIN</td>
                  <td>
                    <a href="http://" class="btn bg-warning"> edit </a>
                    <a href="http://" class="btn bg-danger"> hapus </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection