@extends('layouts.user-master')

@section('title')
User - Data Perdin
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>PerdinKu</h1>
  </div>

  @include('app.user.modal')

  <div class="section-body">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 style="color: grey;">Data PerdinKu</h4>
              <div class="card-header-action">
                <button type="submit" class="btn btn-primary btn-block" data-toggle="modal" data-target="#tambahPerdin"><i class="fas fa-plus"></i> Tambah Perdin</button>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive table-invoice">
                <table class="table table-striped" style="color: black;">
                  <tr>
                    <th>No</th>
                    <th>Kota</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td class="font-weight-600">Bandung <i class="fas fa-light fa-arrow-right"></i> Surabaya</td>
                    <td>28 Sept - 09 Oct, 2022 <small style="color: gray;">(12 hari)</small></td>
                    <td>Keterangan</td>
                    <td><div class="badge badge-success">Approved</div></td>
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
