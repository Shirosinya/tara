@extends('layouts.main')
@section('title','Suku Cadang')
@section('content')


<div id="content" class="main-content">
    <div class="container">
        <div class="page-header">
        {!! Toastr::message() !!}
            <div class="page-title">
                <!-- <h3>Suku Cadang</h3> -->
                <div class="crumbs">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                        <li><a href="#">Anggaran</a></li>
                        <li class="active"><a href="#">Suku Cadang</a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-xl-12 col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header border-bottom border-default">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>SUKU CADANG</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area icon-tab">
                    
                    <ul class="nav nav-tabs  mb-3 mt-3" id="iconTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="icon-home-tab" data-toggle="tab" href="#icon-home" role="tab" aria-controls="icon-home" aria-selected="true"><i class="flaticon-home-fill-1"></i>Pengajuan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="icon-profile-tab" data-toggle="tab" href="#icon-profile" role="tab" aria-controls="icon-profile" aria-selected="false"><i class="flaticon-user-7"></i>Realisasi</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="iconTabContent-1">
                        <div class="tab-pane fade show active" id="icon-home" role="tabpanel" aria-labelledby="icon-home-tab">
                            <div class="row" id="cancel-row">
                                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-content widget-content-area">
                                            <button type="button" class="btn btn-success mb-4 mr-2" data-toggle="modal" data-target="#exampleModal" style="">+ Tambah Pengajuan</button>
                                            <!-- Modal Tambah Pengajuan -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengajuan</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('mengajukan') }}" method="POST">
                                                                @csrf
                                                                <div class="form-group mb-4">
                                                                    <label for="exampleFormControlInput1">Nama Kegiatan</label>
                                                                    <input required type="text" name="nama_kegiatan" class="form-control" id="exampleFormControlInput1" placeholder="Nama kegiatan..">
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group mb-4">
                                                                            <label for="exampleFormControlInput2">Tanggal Mulai</label>
                                                                            <input required name="tanggal_mulai" type="date" class="form-control" id="exampleFormControlInput2" placeholder="nama kegiatan..">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group mb-4">
                                                                            <label for="exampleFormControlInput2">Tanggal Selesai</label>
                                                                            <input required name="tanggal_selesai" type="date" class="form-control" id="exampleFormControlInput2" placeholder="nama kegiatan..">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <input type="hidden" class="form-control" name="id_tipe_akun" value="1">
                                                                <!-- <div class="form-group mb-4">
                                                                    <label for="exampleFormControlTextarea1">Example textarea</label>
                                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                </div> -->
                                                                <div class="form-group mb-4">
                                                                    <label for="rupiah">Jumlah Anggaran</label>
                                                                    <div class="input-group mb-4">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text">Rp</span>
                                                                        </div>
                                                                        <input type="text" name="total_pengeluaran" id="rupiah" class="form-control" aria-label="Amount (to the nearest rupiah)">
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text">.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="form-group mb-4 mt-3">
                                                                    <label for="exampleFormControlFile1">Example file input</label>
                                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                                                </div> -->
                                                        </div>   
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary btn-rounded mb-4 mt-2">Ajukan</button>
                                                            </form>
                                                            <button type="button" class="btn btn-dark btn-rounded mb-4 mt-2" data-dismiss="modal">Batal</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Tambah Pengajuan End -->
                                            <div class="table-responsive mb-4">
                                                <table id="default-ordering" class="table table-striped table-bordered table-hover" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Kegiatan</th>
                                                            <th>Mulai</th>
                                                            <th>Selesai</th>
                                                            <th>Anggaran</th>
                                                            <th>Status</th>
                                                            <th class="invisible"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($pengajuans as $pengajuan)
                                                        <tr>
                                                            <td>{{$pengajuan->nama_kegiatan}}</td>
                                                            <td>{{$pengajuan->tanggal_mulai}}</td>
                                                            <td>{{$pengajuan->tanggal_selesai}}</td>
                                                            <td>Rp. {{number_format($pengajuan->total_pengeluaran,2,',','.')}}</td>
                                                            <td class="text-center">{!!$pengajuan->status == 'pending' ? '<span class="badge badge-pills badge-primary">Pending</span>' : ''!!}
                                                            {!!$pengajuan->status == 'disetujui' ? '<span class="badge badge-pills badge-success">Disetujui</span>' : ''!!}
                                                            {!!$pengajuan->status == 'ditolak' ? '<span class="badge badge-pills badge-danger">Ditolak</span>' : ''!!}
                                                        </td>
                                                            <td class="text-center"><button class="btn btn-primary">View</button>
                                                            <button class="btn btn-warning">Edit</button>
                                                            <button class="btn btn-danger">Delete</button></td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Nama Kegiatan</th>
                                                            <th>Mulai</th>
                                                            <th>Selesai</th>
                                                            <th>Anggaran</th>
                                                            <th>Status</th>
                                                            <th class="invisible"></th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="tab-pane fade" id="icon-profile" role="tabpanel" aria-labelledby="icon-profile-tab">
                            <div class="row" id="cancel-row">
                                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-content widget-content-area">
                                            <button type="button" class="btn btn-success mb-4 mr-2" data-toggle="modal" data-target="#exampleModal1" style="">+ Tambah Kegiatan Realisasi</button>
                                            <!-- Modal Tambah Realisasi -->
                                            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Kegiatan Realisasi</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h4 class="modal-heading mb-4 mt-2">Why We Use Electoral College, Not Popular Vote</h4>
                                                            <p class="modal-text mb-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary btn-rounded mb-4 mt-2">Save changes</button>
                                                            <button type="button" class="btn btn-dark btn-rounded mb-4 mt-2" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal Tambah Realisasi End -->
                                            <div class="table-responsive mb-4">
                                                <table id="default-ordering1" class="table table-striped table-bordered table-hover" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                            <th class="invisible"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                            <td class="text-center"><button class="btn btn-primary">View</button> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170,750</td>
                                                            <td class="text-center"><button class="btn btn-primary">View</button> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Yuri Berry</td>
                                                            <td>Chief Marketing Officer (CMO)</td>
                                                            <td>40</td>
                                                            <td>2009/06/25</td>
                                                            <td>$675,000</td>
                                                            <td class="text-center"><button class="btn btn-primary">View</button> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Caesar Vance</td>
                                                            <td>Pre-Sales Support</td>
                                                            <td>21</td>
                                                            <td>2011/12/12</td>
                                                            <td>$106,450</td>
                                                            <td class="text-center"><button class="btn btn-primary">View</button> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Doris Wilder</td>
                                                            <td>Sales Assistant</td>
                                                            <td>23</td>
                                                            <td>2010/09/20</td>
                                                            <td>$85,600</td>
                                                            <td class="text-center"><button class="btn btn-primary">View</button> </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                            <th class="invisible"></th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection