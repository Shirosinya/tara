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
                        <li><a>Anggaran</a></li>
                        <li><a>Suku Cadang</a></li>
                        <li class="active"><a>Bukti {{$realisasis->pengajuan->nama_kegiatan}}</a> </li>
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
                            <h4>{{$realisasis->pengajuan->nama_kegiatan}}</h4>
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
                                    @if($user->role_id == '1' && $realisasis->diajukan == 'no' || $realisasis->status_real == 'ditolak')
                                    <button type="button" class="btn btn-success mb-4 mr-2" data-toggle="modal" data-target="#exampleModal" style="">+ Tambah Bukti</button>
                                    <!-- Modal Tambah Bukti -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Bukti</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/detailrealisasi/store/{{$id_realisasi}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-group mb-4">
                                                            <label for="exampleFormControlInput1">Nama Bukti</label>
                                                            <input required type="text" name="nama_bukti" class="form-control" id="exampleFormControlInput1" placeholder="Nama kegiatan..">
                                                        </div>
                                                        <div class="form-group mb-4">
                                                            <label for="exampleFormControlInput2">Tanggal</label>
                                                            <input required name="tanggal" type="date" class="form-control">
                                                        </div>
                                                        <input type="hidden" class="form-control" name="id_tipe_akun" value="1">
                                                        <div class="form-group mb-4">
                                                            <label for="rupiah">Jumlah Anggaran</label>
                                                            <div class="input-group mb-4">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">Rp</span>
                                                                </div>
                                                                <input type="text" name="pengeluaran" id="rupiah" class="form-control" aria-label="Amount (to the nearest rupiah)">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-4 mt-3">
                                                            <label for="exampleFormControlFile1">File Bukti</label>
                                                            <input required name="file_bukti" type="file" class="form-control-file" id="exampleFormControlFile1">
                                                        </div>
                                                </div>   
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary btn-rounded mb-4 mt-2">Ajukan</button>
                                                    </form>
                                                    <button type="button" class="btn btn-dark btn-rounded mb-4 mt-2" data-dismiss="modal">Batal</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Tambah Bukti End -->
                                    @endif
                                    <div class="table-responsive mb-4">
                                        <table id="default-ordering2" class="table table-striped table-bordered table-hover" style="width:100%">
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
                                                    <td><a class="thumbnail" data-toggle="modal" data-target="#ShowModal{{$detail_realisasi->id}}">
                                                        <img src="{{asset('/storage/images/detail_realisasi/'.$detail_realisasi->file_bukti)}}" alt="{{ $detail_realisasi->file_bukti }}" 
                                                        width="100" height="67" style="cursor: pointer;"></a>
                                                        <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#ShowModal{{$detail_realisasi->id}}">Show</button> -->
                                                        <!-- Modal Show File Bukti -->
                                                        <div id="ShowModal{{$detail_realisasi->id}}" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="exampleDangerAlertLabel">
                                                            <div class="modal-dialog modal-xl" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                        </button>
                                                                        <image style="width: 100%; height: 100%;" 
                                                                        src="{{asset('/storage/images/detail_realisasi/'.$detail_realisasi->file_bukti)}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Modal Show File Bukti End -->
                                                    </td>
                                                    @if($user->role_id == '1' && $realisasis->diajukan == 'no' || $realisasis->status_real == 'ditolak')
                                                    {!!$user->role_id == '1' ? '<td>' : '<td style="text-align: center; vertical-align: center;">' !!}
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#EditModal{{$detail_realisasi->id}}">Edit</button>
                                                    <!-- Modal UPDATE Bukti -->
                                                    <div class="modal fade" id="EditModal{{$detail_realisasi->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Bukti</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="/detailrealisasi/update/{{$detail_realisasi->id}}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="form-group mb-4">
                                                                            <label for="exampleFormControlInput1">Nama Bukti</label>
                                                                            <input required type="text" value="{{$detail_realisasi->nama_bukti}}" name="nama_bukti" class="form-control" value="" id="exampleFormControlInput1" placeholder="Nama kegiatan..">
                                                                        </div>
                                                                        <div class="form-group mb-4">
                                                                            <label for="exampleFormControlInput2">Tanggal</label>
                                                                            <input required name="tanggal" value="{{\Carbon\Carbon::parse($detail_realisasi->tanggal)->format('Y-m-d')}}" type="date" class="form-control">
                                                                        </div>
                                                                        <input type="hidden" class="form-control" name="id_tipe_akun" value="1">
                                                                        <div class="form-group mb-4">
                                                                            <label for="rupiah">Jumlah Anggaran</label>
                                                                            <div class="input-group mb-4">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text">Rp</span>
                                                                                </div>
                                                                                <input type="text" name="pengeluaran" value="{{$detail_realisasi->pengeluaran}}" id="rupiah" class="form-control" aria-label="Amount (to the nearest rupiah)">
                                                                                <div class="input-group-append">
                                                                                    <span class="input-group-text">.00</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group mb-4 mt-3">
                                                                            <label for="exampleFormControlFile1">File Bukti</label>
                                                                            <input name="file_bukti" type="file" class="form-control-file" id="exampleFormControlFile1">
                                                                            <img class="mt-3" width="100" height="67" src="{{asset('/storage/images/detail_realisasi/'.$detail_realisasi->file_bukti)}}" alt="{{$detail_realisasi->file_bukti}}">
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
                                                    <!-- Modal UPDATE Bukti End -->
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#HapusModal{{$detail_realisasi->id}}">Delete</button>
                                                    <!-- Modal HAPUS Bukti -->
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
                                                                    <form action="/detailrealisasi/destroy/{{$detail_realisasi->id}}" method="POST">
                                                                        @csrf
                                                                        <button type="submit" class="btn btn-gradient-danger btn-rounded mt-3 mb-4">Hapus</button>
                                                                    </form>
                                                                    <button type="button" class="btn btn-dark btn-rounded mt-3 mb-4" data-dismiss="modal">Batal</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Modal HAPUS Bukti End -->
                                                    </td>
                                                    @endif
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
                                    <a href="/sukucadang#icon-profile"><button type="button" class="btn btn-secondary mb-4 mr-2"><i class='flaticon-arrow-left-1'></i> Kembali</button></a>
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