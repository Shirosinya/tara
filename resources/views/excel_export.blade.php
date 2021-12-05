<html>
    <h1>Anggaran Departemen Keamanan</h1>
    <table border="1">
        <thead>
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Akun</th>
                <th rowspan="2">Detail</th>
                <th>RUPS RKAP</th>
                <th colspan="2" rowspan="2">Keterangan</th>
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
            @php
                $rups_grand_total = 0;

                $total_month_data_rencana = array(0,0,0,0,0,0,0,0,0,0,0,0);
                $total_month_data_realisasi = array(0,0,0,0,0,0,0,0,0,0,0,0);

                $total_total_row_rencana = 0;
                $total_total_row_realisasi = 0;
                $total_cumulative_rencana = 0;
                $total_cumulative_realisasi = 0;
            @endphp
            @foreach($data as $value)
                @php
                    $rups_total = 0;
                    $rencana_month_data = array(0,0,0,0,0,0,0,0,0,0,0,0);
                    $realisasi_month_data = array(0,0,0,0,0,0,0,0,0,0,0,0);

                    $total_row_rencana = 0;
                    $total_row_realisasi = 0;

                @endphp
                @foreach($data_peng->where('id_tipe_akun', '=', $value->id) as $pengval)
                    @php
                        $month_data = array(0,0,0,0,0,0,0,0,0,0,0,0);
                        $rups_total += $pengval['total_pengeluaran'];
                        $month_peng = date('m',strtotime($pengval['tanggal_mulai']));
                        $index_md = intval($month_peng)-1;

                        $month_data[$index_md] = $pengval['total_pengeluaran'];
                        $rencana_month_data[$index_md] += $pengval['total_pengeluaran'];
                        $total_month_data_rencana[$index_md] += $pengval['total_pengeluaran'];
                        
                        if($pengval->realisasi->status_real == 'disetujui'){
                            $realisasi_month_data[$index_md] += $pengval->realisasi->total_pengeluaran_real;
                            $total_month_data_realisasi[$index_md] += $pengval->realisasi->total_pengeluaran_real;
                        }

                        $total_row_peng = 0;
                    @endphp
                <tr>
                    <td></td>
                    <td>{{$pengval->tipe_akun->nama_tipe}}</td>
                    <td>{{$pengval->nama_kegiatan}}</td>
                    <td>{{$pengval->total_pengeluaran}}</td>
                    <td colspan="2">-</td>
                    @foreach($month_data as $md)
                        <td>{{$md}}</td>
                        @php
                            $total_row_peng += $md;
                        @endphp
                    @endforeach
                    <td>{{$total_row_peng}}</td>
                </tr>
                @endforeach
            <tr>
                <td rowspan="2">{{$loop->iteration}}</td>
                <td rowspan="2" colspan="2">Sub Total-> {{$value->nama_tipe}}</td>
                <td rowspan="2">{{$rups_total}}</td>
                @php
                    $rups_grand_total+= $rups_total;
                @endphp
                <td colspan="2">Rencana</td>
                    @foreach($rencana_month_data as $md)
                        <td>{{$md}}</td>
                        @php
                            $total_row_rencana += $md;
                        @endphp
                    @endforeach
                <td>{{$total_row_rencana}}</td>
                @php
                    $total_total_row_rencana += $total_row_rencana;
                @endphp
            </tr>
            <tr>
                <td colspan="2">Realisasi</td>
                    @foreach($realisasi_month_data as $md)
                        <td>{{$md}}</td>
                        @php
                            $total_row_realisasi += $md;
                        @endphp
                    @endforeach
                <td>{{$total_row_realisasi}}</td>
                @php
                    $total_total_row_realisasi += $total_row_realisasi;
                @endphp
            </tr>
            @endforeach

            <tr>
                <td rowspan="6" colspan="3"><b>GRAND TOTAL</b></td>
                <td rowspan="6">{{$rups_grand_total}}</td>
                <td rowspan="3">Rencana</td>
                <td>per bulan</td>
                @foreach($total_month_data_rencana as $md)
                    <td>{{$md}}</td>    
                    @php
                        $total_cumulative_rencana += $md;
                    @endphp
                @endforeach
                <td>{{$total_total_row_rencana}}</td>
            </tr>
            <tr>
                @php
                    $cumulative = 0;
                @endphp
                <td>Kumulatif</td>
                @foreach($total_month_data_rencana as $md)
                    @if($md == 0)
                        <td>0</td>
                    @else
                        @php
                        $cumulative += $md;
                        @endphp
                        <td>{{$cumulative}}</td>
                    @endif
                @endforeach
                <td>{{$total_cumulative_rencana}}</td>
            </tr>
            <tr>
                @php
                    $cumulative = 0;
                @endphp
                <td>% dari Grand Total</td>
                @foreach($total_month_data_rencana as $md)
                    @if($md == 0)
                        <td>0</td>
                    @else
                        @php
                            $cumulative += $md;
                        @endphp
                        <td>{{number_format($cumulative/$rups_grand_total*100, 2, ',', ' ')}}%</td>
                    @endif
                @endforeach
                <td>{{number_format($total_cumulative_rencana/$rups_grand_total*100, 2, ',', ' ')}}%</td>
            </tr>
            <tr>
                <td rowspan="3">Realisasi</td>
                <td>per bulan</td>
                @foreach($total_month_data_realisasi as $md)
                    <td>{{$md}}</td>   
                    @php
                        $total_cumulative_realisasi += $md;
                    @endphp
                @endforeach
                <td>{{$total_total_row_realisasi}}</td>
            </tr>
            <tr>
                @php
                    $cumulative = 0;
                @endphp
                <td>Kumulatif</td>
                @foreach($total_month_data_realisasi as $md)
                    @if($md == 0)
                        <td>0</td>
                    @else
                        @php
                        $cumulative += $md;
                        @endphp
                        <td>{{$cumulative}}</td>
                    @endif
                @endforeach
                <td>{{$total_cumulative_realisasi}}</td>
            </tr>
            <tr>
                @php
                    $cumulative = 0;
                @endphp
                <td>% dari GRAND TOTAL</td>
                @foreach($total_month_data_realisasi as $md)
                    @if($md == 0)
                        <td>0</td>
                    @else
                        @php
                            $cumulative += $md;
                        @endphp
                        <td>{{number_format($cumulative/$rups_grand_total*100, 2, ',', ' ')}}%</td>
                    @endif
                @endforeach
                <td>{{number_format($total_cumulative_realisasi/$rups_grand_total*100, 2, ',', ' ')}}%</td>
            </tr>
        </tbody>
    </table>
</html>