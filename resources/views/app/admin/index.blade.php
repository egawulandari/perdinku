@extends('layouts.admin-master')

@section('title')
Admin - Data Pengguna
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Data Pengguna</h1>
  </div>

  <div class="section-body">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-body p-0">
              <div class="table-responsive table-invoice">
                <table class="table table-striped">
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td class="font-weight-600">Kusnadi</td>
                    <td>kusnadi@gmail.com</td>
                    <td><div class="badge badge-success">Divisi - SDM</div></td>
                    <td>
                      <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                      <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td class="font-weight-600">Fani</td>
                    <td>fani@gmail.com</td>
                    <td><div class="badge badge-warning">Pegawai</div></td>
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
