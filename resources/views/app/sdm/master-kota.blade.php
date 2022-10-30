@extends('layouts.sdm-master')

@section('title')
SDM - Data Kota
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Master Kota</h1>
  </div>

  <div class="section-body">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 style="color: grey;">Master Kota</h4>
              <div class="card-header-action">
                <a href="#" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Kota</a>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive table-invoice">
                <table class="table table-striped" style="color: black;">
                  <tr>
                    <th>No</th>
                    <th>Nama Kota</th>
                    <th>Provinsi</th>
                    <th>Pulau</th>
                    <th>Luar Negeri</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Aksi</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td class="font-weight-600">Bandung</td>
                    <td>Jawa Barat</td>
                    <td>Jawa</td>
                    <td>Tidak</td>
                    <td>-6.882021</td>
                    <td>107.10293</td>
                    <td>
                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
