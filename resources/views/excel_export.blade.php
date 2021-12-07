<html>
    <head>
    </head>
    <body>
        <h1>Anggaran Departemen Keamanan</h1>
        <table style="border: 1px solid black; border-collapse: collapse;" >
            <thead>
                <tr>
                    <th style="border: 1px solid black; text-align: center;"rowspan="2"><b>No</b></th>
                    <th style="border: 1px solid black; text-align: center;"rowspan="2"><b>Akun</b></th>
                    <th style="border: 1px solid black; text-align: center;"rowspan="2"><b>Detail</b></th>
                    <th style="border: 1px solid black; text-align: center;"><b>RUPS RKAP</b></th>
                    <th style="border: 1px solid black; text-align: center;"colspan="2" rowspan="2"><b>Keterangan</b></th>
                    <th style="border: 1px solid black; text-align: center;"colspan="12"><b>Target Realisasi 2021(Rp)</b></th>
                    <th style="border: 1px solid black; text-align: center;"rowspan="2"><b>Total</b></th>
                </tr>
                <tr>
                    <th style="border: 1px solid black; text-align: center;"><b>(Rp)</b></th>
                    <th style="border: 1px solid black; text-align: center;"><b>Januari</b></th>
                    <th style="border: 1px solid black; text-align: center;"><b>Februari</b></th>
                    <th style="border: 1px solid black; text-align: center;"><b>Maret</b></th>
                    <th style="border: 1px solid black; text-align: center;"><b>April</b></th>
                    <th style="border: 1px solid black; text-align: center;"><b>Mei</b></th>
                    <th style="border: 1px solid black; text-align: center;"><b>Juni</b></th>
                    <th style="border: 1px solid black; text-align: center;"><b>Juli</b></th>
                    <th style="border: 1px solid black; text-align: center;"><b>Agustus</b></th>
                    <th style="border: 1px solid black; text-align: center;"><b>September</b></th>
                    <th style="border: 1px solid black; text-align: center;"><b>Oktober</b></th>
                    <th style="border: 1px solid black; text-align: center;"><b>November</b></th>
                    <th style="border: 1px solid black; text-align: center;"><b>Desember</b></th>
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
                        <!-- NO -->
                        <td style="border: 1px solid black;"></td>
                        <!-- Akun -->
                        <td style="border: 1px solid black;">{{$pengval->tipe_akun->nama_tipe}}</td>
                        <!-- Detail -->
                        <td style="border: 1px solid black;"><i>{{$pengval->nama_kegiatan}}</i></td>
                        <!-- RUPS -->
                        <td style="border: 1px solid black; text-align: right;">{{$pengval->total_pengeluaran}}</td>
                        <!-- Keterangan -->
                        <td style="border: 1px solid black;" colspan="2"></td>
                        <!-- Pengeluaran Perbulan -->
                        @foreach($month_data as $md)
                            <td style="border: 1px solid black; text-align: right;">{{$md}}</td>
                            @php
                                $total_row_peng += $md;
                            @endphp
                        @endforeach
                        <!-- Total -->
                        <td style="border: 1px solid black;">{{$total_row_peng}}</td>
                    </tr>
                    @endforeach
                <!-- Sub total Akun -->
                <tr>
                    <!-- NO -->
                    <td rowspan="2" style="background: #bad9c1; border: 1px solid black;">{{$loop->iteration}}</td>
                    <!-- Akun -->
                    <td rowspan="2" colspan="2" style="background: #bad9c1; border: 1px solid black;"><b>Sub Total-> {{$value->nama_tipe}}</b></td>
                    <!-- Detail -->
                    <td rowspan="2" style="background: #bad9c1; text-align: right; border: 1px solid black;"><b>{{$rups_total}}</b></td>
                    <!-- RUPS Sub Total Akun Row Rencana -->
                    @php
                        $rups_grand_total+= $rups_total;
                    @endphp
                    <td colspan="2" style="background: #bad9c1; border: 1px solid black; color: darkgreen;"><b>Rencana</b></td>
                    <!-- Pengeluaran perbulan row rencana -->
                    @foreach($rencana_month_data as $md)
                        <td style="background: #bad9c1; text-align: right; border: 1px solid black; color: darkgreen;"><b><i>{{$md}}</i></b></td>
                        @php
                            $total_row_rencana += $md;
                        @endphp
                    @endforeach
                    <!-- Total Pengeluaran Perbulan Row Rencana -->
                    <td style="background: #bad9c1; text-align: right; border: 1px solid black; color: darkgreen;"><b>{{$total_row_rencana}}</b></td>
                    @php
                        $total_total_row_rencana += $total_row_rencana;
                    @endphp
                </tr>
                <!-- Row Realisasi Sub Total Akun -->
                <tr>
                    <!-- Keterangan -->
                    <td colspan="2" style="background: #bad9c1; border: 1px solid black; color: #1a83b8;"><b>Realisasi</b></td>
                    <!-- Pengeluaran Perbulan Row Realisasi -->
                    @foreach($realisasi_month_data as $md)
                        <td style="background: #bad9c1; text-align: right; border: 1px solid black; color: #1a83b8;"><b><i>{{$md}}</i></b></td>
                        @php
                            $total_row_realisasi += $md;
                        @endphp
                    @endforeach
                    <!-- Total Pengeluaran Perbulan Row Realisasi -->
                    <td style="background: #bad9c1; text-align: right; border: 1px solid black; color: #1a83b8;">{{$total_row_realisasi}}</td>
                    @php
                        $total_total_row_realisasi += $total_row_realisasi;
                    @endphp
                </tr>
                @endforeach

                <!-- GRAND TOTAL ROW -->
                <tr>
                    <!-- GRAND TOTAL -->
                    <td style="border: 1px solid black; text-align: center; background: lightgoldenrodyellow;" rowspan="6" colspan="3"><b>GRAND TOTAL</b></td>
                    <!-- RUPS GRAND TOTAL -->
                    <td style="border: 1px solid black; text-align: center; background: lightgoldenrodyellow;" rowspan="6"><b>{{$rups_grand_total}}</b></td>
                    <!-- Grand Total Row Rencana -->
                    <td rowspan="3" style="border: 1px solid black; color: darkorange; background: lightgoldenrodyellow;"><b><u>Rencana</u></b></td>
                    <!-- Grand Total Pengeluaran Perbulan Row Rencana -->
                    <td style="border: 1px solid black; color: darkorange; background: lightgoldenrodyellow;">per bulan</td>
                    @foreach($total_month_data_rencana as $md)
                        <td style="border: 1px solid black; text-align:right; color: darkorange; background: lightgoldenrodyellow;">{{$md}}</td>    
                        @php
                            $total_cumulative_rencana += $md;
                        @endphp
                    @endforeach
                    <!-- Grand Total, Total Pengeluaran Perbulan Row Rencana -->
                    <td style="border: 1px solid black; text-align:right; color: darkorange; background: lightgoldenrodyellow;"><b>{{$total_total_row_rencana}}</b></td>
                </tr>
                <!-- Grand Total Row Rencana Kumulatif -->
                <tr>
                    @php
                        $cumulative = 0;
                    @endphp
                    <!-- Grand Total Row Rencana Kumulatif -->
                    <td style="border: 1px solid black; background: lightgoldenrodyellow; color: darkorange;">Kumulatif</td>
                    <!-- Grand Total Pengeluaran Kumulatif Perbulan Row Rencana -->
                    @foreach($total_month_data_rencana as $md)
                        @if($md == 0)
                            <td style="border: 1px solid black; text-align:right; background: lightgoldenrodyellow; color: darkorange;">0</td>
                        @else
                            @php
                            $cumulative += $md;
                            @endphp
                            <td style="border: 1px solid black; text-align:right; background: lightgoldenrodyellow; color: darkorange;">{{$cumulative}}</td>
                        @endif
                    @endforeach
                    <!-- Grand Total, Total Pengeluaran Kumulatif Perbulan Row Rencana -->
                    <td style="border: 1px solid black; background: lightgoldenrodyellow; color: darkorange;"><b>{{$total_cumulative_rencana}}</b></td>
                </tr>
                <!-- Grand Total Presentase Row Rencana -->
                <tr>
                    @php
                        $cumulative = 0;
                    @endphp
                    <!-- Grand Total Presentase Row Rencana -->
                    <td style="border: 1px solid black; background: lightgoldenrodyellow; color: darkorange;">% dari GRAND TOTAL</td>
                    <!-- Grand Total Presentase Perbulan Row Rencana -->
                    @foreach($total_month_data_rencana as $md)
                        @if($md == 0)
                            <td style="border: 1px solid black; text-align: right; background: lightgoldenrodyellow; color: darkorange;"><b>0</b></td>
                        @else
                            @php
                                $cumulative += $md;
                            @endphp
                            <td style="border: 1px solid black; text-align: right; background: lightgoldenrodyellow; color: darkorange;"><b>{{number_format($cumulative/$rups_grand_total*100, 2, ',', ' ')}}%</b></td>
                        @endif
                    @endforeach
                    <!-- Grand Total, Total Presentase Perbulan Row Rencana -->
                    <td style="border: 1px solid black; text-align: right; background: lightgoldenrodyellow; color: darkorange;"><b>{{number_format($total_cumulative_rencana/$rups_grand_total*100, 2, ',', ' ')}}%</b></td>
                </tr>
                <!-- Grand Total Row Realisasi -->
                <tr>
                    <td style="border: 1px solid black; background: lightgoldenrodyellow; color: #1a83b8;" rowspan="3"><b><u>Realisasi</u></b></td>
                    <!-- Grand Total Pengeluaran Perbulan Row Realisasi -->
                    <td style="border: 1px solid black; background: lightgoldenrodyellow; color: #1a83b8;">per bulan</td>
                    @foreach($total_month_data_realisasi as $md)
                        <td style="border: 1px solid black; text-align: right; background: lightgoldenrodyellow; color: #1a83b8;">{{$md}}</td>   
                        @php
                            $total_cumulative_realisasi += $md;
                        @endphp
                    @endforeach
                    <!-- Grand Total, Total Pengeluaran Perbulan Row Realisasi -->
                    <td style="border: 1px solid black; text-align:right; background: lightgoldenrodyellow; color: #1a83b8;"><b>{{$total_total_row_realisasi}}</b></td>
                </tr>
                <!-- Grand Total Row Realisasi Kumulatif -->
                <tr>
                    @php
                        $cumulative = 0;
                    @endphp
                    <td style="border: 1px solid black; background: lightgoldenrodyellow; color: #1a83b8;">Kumulatif</td>
                    @foreach($total_month_data_realisasi as $md)
                        @if($md == 0)
                            <td style="border: 1px solid black; text-align: right; background: lightgoldenrodyellow; color: #1a83b8;">0</td>
                        @else
                            @php
                            $cumulative += $md;
                            @endphp
                            <td style="border: 1px solid black; text-align: right; background: lightgoldenrodyellow; color: #1a83b8;">{{$cumulative}}</td>
                        @endif
                    @endforeach
                    <td style="border: 1px solid black; text-align: right; background: lightgoldenrodyellow; color: darkorange;">{{$total_cumulative_realisasi}}</td>
                </tr>
                <!-- Grand Total Presentase Row Realisasi -->
                <tr>
                    @php
                        $cumulative = 0;
                    @endphp
                    <td style="border: 1px solid black; background: lightgoldenrodyellow; color: #1a83b8;">% dari GRAND TOTAL</td>
                    @foreach($total_month_data_realisasi as $md)
                        @if($md == 0)
                            <td style="border: 1px solid black; text-align: right; background: lightgoldenrodyellow; color: #1a83b8;"><b>0</b></td>
                        @else
                            @php
                                $cumulative += $md;
                            @endphp
                            <td style="border: 1px solid black; text-align: right; background: lightgoldenrodyellow; color: #1a83b8;"><b>{{number_format($cumulative/$rups_grand_total*100, 2, ',', ' ')}}%</b></td>
                        @endif
                    @endforeach
                    <td style="border: 1px solid black; text-align: right; background: lightgoldenrodyellow; color: #1a83b8;"><b>{{number_format($total_cumulative_realisasi/$rups_grand_total*100, 2, ',', ' ')}}%</b></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>