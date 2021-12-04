<html>
    <h1>Anggaran Departemen Keamanan</h1>
    <table border="1">
        <thead>
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Akun</th>
                <th rowspan="2">Detail</th>
                <th>RUPS RKAP</th>
                <th rowspan="2">Keterangan</th>
                <th colspan="12">Target Realisasi 2021(Rp)</th>
                <th rowspan="2">Total</th>
            </tr>
            <tr>
                <th>(Rp)</th>
                <th>Januari</th>
                <th>Februari</th>
                <th>Maret</th>
                <th>April</th>
                <th>Mei</th>
                <th>Juni</th>
                <th>Juli</th>
                <th>Agustus</th>
                <th>September</th>
                <th>Oktober</th>
                <th>November</th>
                <th>Desember</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $value)
                @php
                    $rups_total = 0;
                    $rencana_month_data = array(0,0,0,0,0,0,0,0,0,0,0,0);
                    $realisasi_month_data = array(0,0,0,0,0,0,0,0,0,0,0,0);
                @endphp
                @foreach($data_peng->where('id_tipe_akun', '=', $value->id) as $pengval)
                    @php
                        $month_data = array(0,0,0,0,0,0,0,0,0,0,0,0);
                        $rups_total += $pengval['total_pengeluaran'];
                        $month_peng = date('m',strtotime($pengval['tanggal_mulai']));
                        $index_md = intval($month_peng)-1;
                        $month_data[$index_md] = $pengval['total_pengeluaran'];
                        $rencana_month_data[$index_md] += $pengval['total_pengeluaran'];
                        
                        if($pengval->realisasi->status_real == 'disetujui'){
                            $realisasi_month_data[$index_md] += $pengval->realisasi->total_pengeluaran_real;
                        }
                    @endphp
                <tr>
                    <td></td>
                    <td>{{$pengval->tipe_akun->nama_tipe}}</td>
                    <td>{{$pengval->nama_kegiatan}}</td>
                    <td>{{$pengval->total_pengeluaran}}</td>
                    <td>-</td>
                    @foreach($month_data as $md)
                        <td>{{$md}}</td>
                    @endforeach
                    <td>-</td>
                </tr>
                @endforeach
            <tr>
                <td rowspan="2">{{$loop->iteration}}</td>
                <td rowspan="2" colspan="2">Sub Total-> {{$value->nama_tipe}}</td>
                <td rowspan="2">{{$rups_total}}</td>
                <td>Rencana</td>
                    @foreach($rencana_month_data as $md)
                        <td>{{$md}}</td>
                    @endforeach
                <td>-</td>
            </tr>
            <tr>
                <td>Realisasi</td>
                    @foreach($realisasi_month_data as $md)
                        <td>{{$md}}</td>
                    @endforeach
                <td>-</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</html>