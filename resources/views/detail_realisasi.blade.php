@extends('layouts.main')
@section('title','Detail Realisasi')
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
                    <div class="row" id="cancel-row">
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    @if($user->role_id == '1')
                                    <button type="button" class="btn btn-success mb-4 mr-2" data-toggle="modal" data-target="#exampleModal" style="">+ Tambah Bukti</button>
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
                                    @endif
                                    <div class="table-responsive mb-4">
                                        <table id="default-ordering" class="table table-striped table-bordered table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Bukti</th>
                                                    <th>Tanggal</th>
                                                    <th>Pengeluaran</th>
                                                    <th>File Bukti</th>
                                                    @if($user->role_id == '1')
                                                    <th class="invisible"></th>
                                                    @endif
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;?>
                                                @foreach($detail_realisasis as $detail_realisasi)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$detail_realisasi->nama_bukti}}</td>
                                                    <td>{{\Carbon\Carbon::parse($detail_realisasi->tanggal)->format('d-m-Y')}}</td>
                                                    <td>Rp. {{number_format($detail_realisasi->pengeluaran,2,',','.')}}</td>
                                                    <td>-</td>
                                                    <td class="text-center">
                                                    {!!$detail_realisasi->status == 'pending' ? '<span class="badge badge-pills badge-primary">Pending</span>' : ''!!}
                                                    {!!$detail_realisasi->status == 'disetujui' ? '<span class="badge badge-pills badge-success">Disetujui</span>' : ''!!}
                                                    {!!$detail_realisasi->status == 'ditolak' ? '<span class="badge badge-pills badge-danger">Ditolak</span>' : ''!!}
                                                    </td>
                                                    {!!$user->role_id == '1' ? '<td>' : '<td style="text-align: center; vertical-align: center;">' !!}
                                                    @if($user->role_id == '1')
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#EditModal{{$detail_realisasi->id}}">Edit</button>
                                                    <!-- Modal UPDATE Pengajuan -->
                                                    <div class="modal fade" id="EditModal{{$detail_realisasi->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Pengajuan</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="" method="POST">
                                                                        @csrf
                                                                        <div class="form-group mb-4">
                                                                            <label for="exampleFormControlInput1">Nama Kegiatan</label>
                                                                            <input required type="text" name="nama_kegiatan" class="form-control" id="exampleFormControlInput1" placeholder="Nama kegiatan.." value="{{$detail_realisasi->nama_kegiatan}}">
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group mb-4">
                                                                                    <label for="exampleFormControlInput2">Tanggal Mulai</label>
                                                                                    <input required name="tanggal_mulai" type="date" class="form-control" value="{{$detail_realisasi->tanggal_mulai}}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group mb-4">
                                                                                    <label for="exampleFormControlInput2">Tanggal Selesai</label>
                                                                                    <input required name="tanggal_selesai" type="date" class="form-control" value="{{$detail_realisasi->tanggal_selesai}}">
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
                                                                                <input type="text" name="total_pengeluaran" id="rupiah{{$detail_realisasi->id}}" class="form-control" value="{{$detail_realisasi->total_pengeluaran}}" aria-label="Amount (to the nearest rupiah)">
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
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#HapusModal{{$detail_realisasi->id}}">Delete</button>
                                                    <!-- Modal HAPUS Pengajuan -->
                                                    <div id="HapusModal{{$detail_realisasi->id}}" class="modal fade show text-center danger-alert" tabindex="-1" role="dialog" aria-labelledby="exampleDangerAlertLabel">
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
                                                                    <form action="" method="POST">
                                                                        @csrf
                                                                        <button type="submit" class="btn btn-gradient-danger btn-rounded mt-3 mb-4">Hapus</button>
                                                                    </form>
                                                                    <button type="button" class="btn btn-dark btn-rounded mt-3 mb-4" data-dismiss="modal">Batal</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal HAPUS Pengajuan End -->
                                                    @elseif($user->role_id == '1' && $detail_realisasi->status == 'ditolak')
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#alasanPengModal{{$detail_realisasi->id}}">Alasan</button>
                                                    <!-- Modal view Alasan Penolakan Pengajuan -->
                                                    <div class="modal fade" id="alasanPengModal{{$detail_realisasi->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Alasan Penolakan</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>{{$detail_realisasi->alasan_ditolak}}</p>
                                                                </div>   
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal view Alasan Penolakan Pengajuan End -->
                                                    @elseif($user->role_id == '2' && $detail_realisasi->status == 'pending')
                                                            <input type="checkbox" value="{{$detail_realisasi->id}}" class="cb-child">
                                                    @elseif($user->role_id == '2' && $detail_realisasi->status == 'ditolak')
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#alasanPengModal{{$detail_realisasi->id}}">Alasan</button>
                                                    <!-- Modal Alasan Penolakan Pengajuan -->
                                                    <div class="modal fade" id="alasanPengModal{{$detail_realisasi->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <form action="" method="POST">
                                                                        @csrf
                                                                        <div class="form-group mb-4">
                                                                            <label for="exampleFormTextArea1">Alasan Penolakan:</label>
                                                                            <textarea required name="alasan_ditolak" rows="4" class="form-control" id="exampleFormTextArea1" placeholder="Alasan Penolakan..">{{$detail_realisasi->alasan_ditolak}}</textarea>
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
                                                    <th>No</th>
                                                    <th>Nama Bukti</th>
                                                    <th>Tanggal</th>
                                                    <th>Pengeluaran</th>
                                                    <th>File Bukti</th>
                                                    @if($user->role_id == '1')
                                                    <th class="invisible"></th>
                                                    @endif
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
@endsection