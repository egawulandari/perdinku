@extends('layouts.sdm-master')

@section('title')
SDM - Data Perdin
@endsection

@section('content')
<section class="section">
<div class="section-header">
    <h1>Pengajuan Perdin</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pengajuan Baru</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">History Pengajuan</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="table-responsive table-invoice">
                                <table class="table table-striped" style="color: black;">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kota</th>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bambang</td>
                                    <td class="font-weight-600">Bandung <i class="fas fa-light fa-arrow-right"></i> Surabaya</td>
                                    <td>28 Sept - 09 Oct, 2022 <small style="color: gray;">(12 hari)</small></td>
                                    <td>Keterangan</td>
                                    <td>
                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="table-responsive table-invoice">
                                <table class="table table-striped" style="color: black;">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kota</th>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bambang</td>
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
</div>
</section>
@endsection
