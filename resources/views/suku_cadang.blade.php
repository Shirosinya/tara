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
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <ul class="p-0 m-0" style="list-style: none;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
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
                                            @if($user->role_id == '1')
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
                                                                            <input required name="tanggal_mulai" type="date" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group mb-4">
                                                                            <label for="exampleFormControlInput2">Tanggal Selesai</label>
                                                                            <input required name="tanggal_selesai" type="date" class="form-control">
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
                                            @elseif($user->role_id == '2')
                                            <button disabled id="buttonSetujui" onclick="setujuiButton()" class="btn btn-warning mb-4 mr-2">Setujui Yang Dipilih</button>
                                            <button disabled id="buttonDitolak" onclick="tolakButton()" class="btn btn-danger mb-4 mr-2">Tolak Yang Dipilih</button>
                                            @endif
                                            <div class="table-responsive mb-4">
                                                <table id="default-ordering" class="table table-striped table-bordered table-hover" style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Tanggal Pengajuan</th>
                                                            <th>Nama Kegiatan</th>
                                                            <th>Mulai</th>
                                                            <th>Selesai</th>
                                                            <th>Anggaran</th>
                                                            <th>Status</th>
                                                            @if($user->role_id == '1')
                                                            <th class="invisible"></th>
                                                            @else
                                                            <th style="text-align: center; vertical-align: center;">
                                                                <input type="checkbox" id="head-cb">
                                                            </th>
                                                            @endif
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $cb_arr = array()?>
                                                        @foreach($pengajuans as $pengajuan)
                                                        <tr>
                                                            <td>{{\Carbon\Carbon::parse($pengajuan->created_at)->format('d-m-Y')}}</td>
                                                            <td>{{$pengajuan->nama_kegiatan}}</td>
                                                            <td>{{\Carbon\Carbon::parse($pengajuan->tanggal_mulai)->format('d-m-Y')}}</td>
                                                            <td>{{\Carbon\Carbon::parse($pengajuan->tanggal_selesai)->format('d-m-Y')}}</td>
                                                            <td>Rp. {{number_format($pengajuan->total_pengeluaran,2,',','.')}}</td>
                                                            <td class="text-center">
                                                            {!!$pengajuan->status == 'pending' ? '<span class="badge badge-pills badge-primary">Pending</span>' : ''!!}
                                                            {!!$pengajuan->status == 'disetujui' ? '<span class="badge badge-pills badge-success">Disetujui</span>' : ''!!}
                                                            {!!$pengajuan->status == 'ditolak' ? '<span class="badge badge-pills badge-danger">Ditolak</span>' : ''!!}
                                                            </td>
                                                            {!!$user->role_id == '1' ? '<td>' : '<td style="text-align: center; vertical-align: center;">' !!}
                                                            @if($user->role_id == '1' && $pengajuan->status == 'pending')
                                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#EditModal{{$pengajuan->id}}">Edit</button>
                                                            <!-- Modal UPDATE Pengajuan -->
                                                            <div class="modal fade" id="EditModal{{$pengajuan->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Pengajuan</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form action="/sukucadang/update{{$pengajuan->id}}/pengajuan" method="POST">
                                                                                @csrf
                                                                                <div class="form-group mb-4">
                                                                                    <label for="exampleFormControlInput1">Nama Kegiatan</label>
                                                                                    <input required type="text" name="nama_kegiatan" class="form-control" id="exampleFormControlInput1" placeholder="Nama kegiatan.." value="{{$pengajuan->nama_kegiatan}}">
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group mb-4">
                                                                                            <label for="exampleFormControlInput2">Tanggal Mulai</label>
                                                                                            <input required name="tanggal_mulai" type="date" class="form-control" value="{{$pengajuan->tanggal_mulai}}">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group mb-4">
                                                                                            <label for="exampleFormControlInput2">Tanggal Selesai</label>
                                                                                            <input required name="tanggal_selesai" type="date" class="form-control" value="{{$pengajuan->tanggal_selesai}}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                <input type="hidden" class="form-control" name="id_tipe_akun" value="1">
                                                                                
                                                                                <div class="form-group mb-4">
                                                                                    <label for="rupiah">Jumlah Anggaran</label>
                                                                                    <div class="input-group mb-4">
                                                                                        <div class="input-group-prepend">
                                                                                            <span class="input-group-text">Rp</span>
                                                                                        </div>
                                                                                        <input type="text" name="total_pengeluaran" id="rupiah{{$pengajuan->id}}" class="form-control" value="{{$pengajuan->total_pengeluaran}}" aria-label="Amount (to the nearest rupiah)">
                                                                                        <div class="input-group-append">
                                                                                            <span class="input-group-text">.00</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                        </div>   
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary btn-rounded mb-4 mt-2">Simpan</button>
                                                                            </form>
                                                                            <button type="button" class="btn btn-dark btn-rounded mb-4 mt-2" data-dismiss="modal">Batal</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Modal UPDATE Pengajuan End -->
                                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#HapusModal{{$pengajuan->id}}">Delete</button>
                                                            <!-- Modal HAPUS Pengajuan -->
                                                            <div id="HapusModal{{$pengajuan->id}}" class="modal fade show text-center danger-alert" tabindex="-1" role="dialog" aria-labelledby="exampleDangerAlertLabel">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                            </button>
                                                                            <i class="flaticon-circle-cross mt-5" style="color:red; font-size:100px;"></i>
                                                                            <h4 class="modal-title mt-4 mb-4">Yakin Akan Menghapus?</h4>
                                                                            <p class="mb-4">Data yang dihapus tidak dapat dikembalikan.</p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <form action="/sukucadang/destroy{{$pengajuan->id}}/pengajuan" method="POST">
                                                                                @csrf
                                                                                <button type="submit" class="btn btn-gradient-danger btn-rounded mt-3 mb-4">Hapus</button>
                                                                            </form>
                                                                            <button type="button" class="btn btn-dark btn-rounded mt-3 mb-4" data-dismiss="modal">Batal</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Modal HAPUS Pengajuan End -->
                                                            @elseif($user->role_id == '1' && $pengajuan->status == 'ditolak')
                                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#alasanPengModal{{$pengajuan->id}}">Alasan</button>
                                                            <!-- Modal view Alasan Penolakan Pengajuan -->
                                                            <div class="modal fade" id="alasanPengModal{{$pengajuan->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Alasan Penolakan</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>{{$pengajuan->alasan_ditolak}}</p>
                                                                        </div>   
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Modal view Alasan Penolakan Pengajuan End -->
                                                            @elseif($user->role_id == '2' && $pengajuan->status == 'pending')
                                                                 <input type="checkbox" value="{{$pengajuan->id}}" class="cb-child">
                                                            @elseif($user->role_id == '2' && $pengajuan->status == 'ditolak')
                                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#alasanPengModal{{$pengajuan->id}}">Alasan</button>
                                                            <!-- Modal Alasan Penolakan Pengajuan -->
                                                            <div class="modal fade" id="alasanPengModal{{$pengajuan->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <form action="{{ route('alasan-penolakan-pengajuan',$pengajuan->id) }}" method="POST">
                                                                                @csrf
                                                                                <div class="form-group mb-4">
                                                                                    <label for="exampleFormTextArea1">Alasan Penolakan:</label>
                                                                                    <textarea required name="alasan_ditolak" rows="4" class="form-control" id="exampleFormTextArea1" placeholder="Alasan Penolakan..">{{$pengajuan->alasan_ditolak}}</textarea>
                                                                                </div>
                                                                        </div>   
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary btn-rounded mb-4 mt-2">Simpan</button>
                                                                            </form>
                                                                            <button type="button" class="btn btn-dark btn-rounded mb-4 mt-2" data-dismiss="modal">Batal</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- Modal Alasan Penolakan Pengajuan End -->
                                                            @endif
                                                        </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Tanggal Pengajuan</th>
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
                        <!-- REALISASI -->
                        <div class="tab-pane fade" id="icon-profile" role="tabpanel" aria-labelledby="icon-profile-tab">
                            <div class="row" id="cancel-row">
                                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-content widget-content-area">
                                            <button type="button" class="btn btn-success mb-4 mr-2" data-toggle="modal" data-target="#exampleModal1" style="">+ Tambah Realisasi</button>
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