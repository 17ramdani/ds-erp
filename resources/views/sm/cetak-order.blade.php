<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <title>DS ERP</title>
    <meta name="description"
        content="Web Based ERP for PT. Dunia Sandang Pratama. PT. Dunia Sandang adalah outlet yang memiliki misi menjadi One Stop Garment Supplier, yaitu outlet yang tidak hanya menyediakan bahan baku dan kelengkapan yang diperlukan oleh garmen dalam satu tempat, tapi juga dapat memberikan kenyamanan dan kemudahan bagi para pelanggan ketika berbelanja.">
    <!-- <link rel="icon" href="assets/img/favicon.ico"> -->

    <!-- STYLES -->
    <style>
        body {
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* table {
            width: 100%;
            border-collapse: collapse;
        }
        table tr td {
            padding: 0;
        } */

        .table-header {
            width: 100%;
            font-family: sans-serif;
            color: #232323;
            border-collapse: collapse;
        }

        /* table tr td:last-child {
            text-align: right;
        } */

        hr.s2 {
            height: 2px;
            margin-top: 0px;
            margin-bottom: 1px;
            border-top: 1px solid black;
            border-bottom: 2px solid black;
        }
    </style>


    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@200;300;400;600;700&display=swap"
        rel="stylesheet"> --}}

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body>
    {{-- <div class="page-container">
    Page
    <span class="page"></span>
    of
    <span class="pages"></span>
    </div> --}}

    {{-- <div class="logo-container">
        <img src="<?= $logo ?>" style="height: 100px">
    </div> --}}

    <table class="table-header" style="padding: 1px; !important;font-size:12px;">
        <thead>
            <tr>
                <td colspan="3" rowspan="2">
                    <img src="<?= $logo ?>" style="height: 95px">
                </td>
                <td rowspan="7">
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                </td>
                <td colspan="3" rowspan="2">
                    <div style="text-align: left">
                        <b>PT. DUNIA SANDANG PRATAMA</b>
                        <br>
                        <span>Jl.Terusan Pasir Koja No.250 Bandung 40221</span>
                        <br>
                        <span>Tlp: 022-6003309 Fax: 022-6003310</span>
                        <br>
                        <span>CS Online : 081222776523</span>
                        <br>
                        <span style="color:blue">www.duniasandang.com</span>
                    </div>
                </td>
            </tr>
            <tr>
            </tr>
            <tr>
                <th colspan="3">
                    <hr class="s2">
                </th>
                <th colspan="3">
                    <hr class="s2">
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tanggal</td>
                <td width="10px">:</td>
                <td><strong>{{ $tanggalnow->format('l,j F Y') }}</strong></td>
                <td>Sales</td>
                <td width="10px">:</td>
                <td><strong>{{ $pesanan['salesna']['nama'] }}</strong></td>
            </tr>
            <tr>
                <td>Nama Customer</td>
                <td>:</td>
                <td><strong>{{ $pesanan['customer']['nama'] }}</strong></td>
                <td>Operator</td>
                <td>:</td>
                <td><strong>___________________</strong></td>
            </tr>
            <tr>
                <td>No.Tlp</td>
                <td>:</td>
                <td><strong>{{ $pesanan['customer']['nohp'] }}</strong></td>
                <td>Payment</td>
                <td>:</td>
                <td><strong>___________________</strong></td>
            </tr>
            <tr>
                <td>Ekpedisi</td>
                <td>:</td>
                <td><strong>___________________</strong></td>
                <td>No.Nota</td>
                <td>:</td>
                <td><strong>{{ $pesanan['nomor'] }}</strong></td>
            </tr>
        </tbody>
    </table>

    <table style="margin-top:5px; padding: 1px; !important;font-size:10px;border-collapse: collapse;" border="1"
        width="100%">
        <thead>
            <tr>
                <th rowspan="2">NO</th>
                <th rowspan="2">JENIS KAIN</th>
                <th colspan="2">SPECK</th>
                <th rowspan="2">WARNA</th>
                <th rowspan="2">KATEGORI</th>
                <th rowspan="2">QTY(ROLL)</th>
                <th rowspan="2">HARGA PER-UNIT</th>
                <th rowspan="2">QTY(KG)</th>
                <th rowspan="2">EST. PEMBAYARAN</th>
            </tr>
            <tr>
                <th>L</th>
                <th>GRAM</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
                $total = 0;
                $total_qty = 0;
                $dp = $pesanan['dp'] ?? 0;
                $ongkir = $pesanan['ongkir'] ?? 0;
                $sisa_bayar = $pesanan['sisa_bayar'] ?? 0;
                $rowspan = [];
            @endphp
            @foreach ($pesanan['details'] as $i => $detail)
                @php
                    if ($detail['satuan'] == 'KG') {
                        $subtotal1 = $detail['qty_act'] * $detail['harga'];
                    } elseif ($detail['satuan'] == 'ROLL') {
                        $subtotal1 = $detail['qty_act'] * $detail['harga'];
                    } elseif ($detail['satuan'] == 'LOT') {
                        $subtotal1 = $detail['qty_act'] * (12 * 25) * $detail['harga'];
                    } else {
                        $subtotal1 = $detail['qty_act'] * $detail['harga'];
                    }
                    // echo 1;
                    $subtotal = $subtotal1 - ($subtotal1 * $detail['total_disc']) / 100;
                    
                    $total += $subtotal;
                    $total_qty += $detail['qty_act'];
                    // $jum_qty = $qtactt;
                    
                    // set rowspan
                    if (!isset($rowspan[$detail['qty']])) {
                        $rowspan[$detail['qty']] = 1;
                        $detail['rowspan'] = 1;
                    } else {
                        $detail['rowspan'] = 0;
                    }
                    
                    $rowspan[$detail['qty']] += 1;
                    
                @endphp
                @if ($detail['bagian'] == 'body')
                    <tr>
                        {{-- @if ($detail['rowspan'] == 1)
                <td style="padding: 2px; !important;font-size:10px;text-align:center;" rowspan="{{ $rowspan[$detail['qty']] }}">{{ $no++ }} | {{ $rowspan[$detail['qty']] }}</td>
                <td rowspan="{{ $rowspan[$detail['qty']] }}">{{ $detail['tipe_kain']['nama'] }}</td>
                @endif --}}

                        <td style="padding: 2px; !important;font-size:10px;text-align:center;">{{ $no++ }}</td>
                        <td>{{ $detail['tipe_kain']['nama'] ?? '' }}</td>
                        <td style="text-align:center;">{{ $detail['tipe_kain']['gramasi']['nama'] ?? '' }}</td>
                        <td style="text-align:center;">{{ $detail['tipe_kain']['lebar']['keterangan'] ?? '' }}</td>
                        <td>{{ $detail['warna_pesanan']['nama'] }}</td>
                        <td>{{ $detail['tipe_kain']['kategori_warna']['nama'] ?? '' }}</td>
                        <td>{{ $detail['qty'] }} {{ $detail['satuan'] }}</td>
                        <td style="text-align:right;">Rp. {{ number_format($detail['harga']) }}</td>
                        <td style="text-align:right;">{{ $detail['qty_act'] }}</td>
                        <td style="text-align:right;">Rp. {{ number_format($subtotal) }}</td>
                    </tr>
                @else
                    <tr>
                        {{-- @if ($detail['rowspan'] == 1)
                <td style="padding: 2px; !important;font-size:10px;text-align:center;" rowspan="{{ $rowspan[$detail['qty']] }}">{{ $no++ }} | {{ $rowspan[$detail['qty']] }}</td>
                <td rowspan="{{ $rowspan[$detail['qty']] }}">{{ $detail['tipe_kain']['nama'] }}</td>
                @endif --}}

                        <td style="padding: 2px; !important;font-size:10px;text-align:center;">{{ $no++ }}</td>
                        <td>{{ $detail['tipe_kain_accessories']['accessories']['name'] ?? '' }}</td>
                        <td style="text-align:center;">{{ '-' }}</td>
                        <td style="text-align:center;">{{ '-' }}</td>
                        <td>{{ $detail['warna_pesanan']['nama'] }}</td>
                        <td>{{ '-' }}</td>
                        <td>{{ $detail['qty'] }} {{ 'KG' }}</td>
                        <td style="text-align:right;">Rp. {{ number_format($detail['harga']) }}</td>
                        <td style="text-align:right;">{{ $detail['qty_act'] }}</td>
                        <td style="text-align:right;">Rp. {{ number_format($subtotal) }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="7"></th>
                <th>Grand Total</th>
                <th>{{ $total_qty }}</th>
                <th style="text-align: right;">Rp. {{ number_format($total) }}</th>
            </tr>
            {{-- <tr>
                <th colspan="6"></th>
                <th>GD</th>
                <th colspan="2">DP</th>
                <th style="text-align: right;">Rp. {{ number_format($dp) }}</th>
            </tr> --}}

            <tr>
                <td colspan="7" rowspan="4" style="text-align:left;font-family: Arial, Helvetica, sans-serif;">
                    <span>*Syarat penjualan:</span><br>
                    <span>1. Untuk Eceran, Kain yang sudah dibeli, tidak dapat diretur atau dibatalkan.</span><br>
                    <span>2. Untuk Roll-an, Tidak terima Retur berupa kain yang sudah dicutting.</span><br>
                    <span>3. Batas Maksimal Retur 3 hari setelah penerimaan barang, Sjln retur dari customer
                        terlampir.</span><br>
                </td>
                <th colspan="2" style="text-align:left;">Deposit</th>
                <th style="text-align:right;">Rp. {{ number_format($dp) }}</th>
            </tr>
            <tr>
                <th colspan="2" style="text-align:left;">Kekurangan</th>
                <th style="text-align:right;">Rp. {{ number_format($sisa_bayar) }}</th>
            </tr>
            <tr>
                <th colspan="2" style="text-align:left;">Ongkos Kirim</th>
                <th style="text-align:right;">Rp. {{ number_format($ongkir) }}</th>
            </tr>
            <tr>
                <th colspan="2" style="text-align:left;">Total Pembayaran</th>
                <th style="text-align:right;">Rp. {{ number_format($total + $ongkir) }}</th>
            </tr>
            <tr>
                <td colspan="7" style="text-align: center;">
                    <span>Terimakasih Telah Menggunakan Pelayanan Kami, <br> Salam dan Sukses Bersama.</span>
                </td>
                <td colspan="3"
                    style="background: ##FFFF00;text-align:left;font-family: Arial, Helvetica, sans-serif;">
                    <span>&nbsp;</span><br>
                    <span>Note:</span><br>
                    <span>Pembayaran DP dan Pelunasan Harap Di Transfer <br>
                        <span style="font-family: Arial, Helvetica, sans-serif;"><b> Ke Rekening PT. DUNIA SANDANG
                                PRATAMA</b></span> <br>
                        <span style="color:red;font-family: Arial, Helvetica, sans-serif;">BCA 1571138889</span> <br>
                        <span>&nbsp;</span><br>
                        <span>&nbsp;</span>
                </td>
            </tr>

            {{-- <tr>
                <td colspan="6" rowspan="2" style="text-align:left;font-family: Arial, Helvetica, sans-serif;">
                    <span>*Syarat penjualan:</span><br>
                    <span>1. Untuk Eceran, Kain yang sudah dibeli, tidak dapat diretur atau dibatalkan.</span><br>
                    <span>2. Untuk Roll-an, Tidak terima Retur berupa kain yang sudah dicutting.</span><br>
                    <span>3. Batas Maksimal Retur 3 hari setelah penerimaan barang, Sjln retur dari customer terlampir.</span><br>
                    <span>Terimakasih Telah Menggunakan Pelayanan Kami, <br> Salam dan Sukses Bersama.</span>
                </td>
                @php
                    $gt = $total - $dp;
                @endphp
                <th colspan="2">Sisa Pembayaran</th>
                <th>GD</th>
                <th style="text-align: right;">Rp. {{ number_format($gt) }}</th>
            </tr>
            <tr>
                <th>GD</th>
                <td colspan="3" style="background: ##FFFF00;text-align:left;font-family: Arial, Helvetica, sans-serif;">
                    <span>&nbsp;</span><br>
                    <span>Note:</span><br>
                    <span>Pembayaran DP dan Pelunasan Harap Di Transfer <br>
                    <span style="font-family: Arial, Helvetica, sans-serif;"><b> Ke Rekening PT. DUNIA SANDANG PRATAMA</b></span> <br>
                    <span style="color:red;font-family: Arial, Helvetica, sans-serif;">BCA 1571138889</span> <br>
                    <span>&nbsp;</span><br>
                    <span>&nbsp;</span>
                </span>
                </td>
            </tr> --}}
        </tfoot>
    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <table style="font-size: 11px;margin-top:10px;width:100%;">
        <thead>
            <tr>
                <th>Dibuat oleh,</th>
                <th>Diketahui oleh,</th>
                <th>Disetujui oleh,</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    ({{ auth()->user()->name }})
                </th>
                <th>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    ( Kabag Sales )
                </th>
                <th>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    {{ $pesanan['customer']['nama'] }}
                </th>
            </tr>
        </tbody>
    </table>

    {{-- <div class="footer">
    <div class="footer-info">
        <span>hello@useanvil.com</span> |
        <span>555 444 6666</span> |
        <span>useanvil.com</span>
    </div>
    </div> --}}
</body>

</html>
