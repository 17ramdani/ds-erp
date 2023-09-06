<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FO - {{ $order->nomor ?? '-' }}</title>
    <link rel="stylesheet" href="{{ asset('plugins/uikit/css/uikit.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') . '?v=' . date('ymdhis') }}">
    <script src="{{ asset('plugins/uikit/js/uikit.min.js') }}"></script>
    <script src="{{ asset('plugins/uikit/js/uikit-icons.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
</head>

<body>
    <div class="uk-margin-medium">
        <table class="rz-table-print uk-text-small">
            <tbody class="uk-text-center">
                <tr class="uk-text-bold">
                    <td colspan="3" rowspan="4">
                        <div class="uk-flex uk-flex-between">
                            <div>
                                <img src="{{ asset('assets/img/logo_toko.png') }}" alt="logo_toko"
                                    class="rz-logo-medium">
                            </div>
                            <div class="uk-text-right">
                                PT. DUNIA SANDANG <br>
                                Jl Terusan Pasirkoja No. 250 <br>
                                cs@duniasandang.com
                            </div>
                        </div>
                    </td>
                    <td colspan="4">NO PESANAN</td>
                    <td colspan="4">TANGGAL PESANAN</td>
                </tr>
                <tr>
                    <td colspan="4">{{ $order->nomor }}</td>
                    <td colspan="4">
                        @php
                            $tgl = \Illuminate\Support\Carbon::parse($order->tanggal)->locale('id');
                            $tgl->settings(['formatFunction' => 'translatedFormat']);
                            echo $tgl->format('l, j F Y');
                        @endphp
                    </td>
                </tr>
                <tr class="uk-text-bold">
                    <td colspan="4">PEMBAYARAN</td>
                    <td colspan="4">TANGGAL KIRIM</td>
                </tr>
                <tr>
                    <td colspan="4">-</td>
                    <td colspan="4">
                        @php
                            $tgl2 = \Illuminate\Support\Carbon::parse($order->tanggal_kirim)->locale('id');
                            $tgl2->settings(['formatFunction' => 'translatedFormat']);
                            echo $tgl2->format('l, j F Y');
                        @endphp</td>
                </tr>
                <tr class="uk-height-small">
                    <td colspan="3">{{ $order['customer']->nama ?? '-' }}</td>
                    <td colspan="8">{{ $order->alamat_kirim }}</td>
                </tr>
                <tr class="uk-text-bold">
                    <td>No</td>
                    <td>Kode Barang</td>
                    <td>Nama Barang</td>
                    <td>GRM</td>
                    <td>LBR</td>
                    <td>Warna</td>
                    <td>Kategori Warna</td>
                    <td>Roll</td>
                    <td>Qty (kg)</td>
                    <td>Harga</td>
                    <td>Total</td>
                </tr>
                @php
                    $total_qtyb = 0;
                    $total_qtya = 0;
                    $total_qty_act = 0;
                    $total = 0;
                @endphp
                @foreach ($order['details'] as $i => $detail)
                    @php
                        if ($detail->bagian == 'Body') {
                            $total_qtyb += $detail->qty;
                        }
                        if ($detail->bagian == 'Accessories') {
                            $total_qtya += $detail->qty;
                        }
                        $total_qty_act += $detail->qty_act;
                        $total += $detail->subtotal;
                    @endphp
                    <tr>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $detail->kode }}</td>
                        <td>{{ $detail->nama }}</td>
                        <td>{{ $detail->gramasi }}</td>
                        <td>{{ $detail->lebar }}</td>
                        <td>{{ $detail->warna }}</td>
                        <td>{{ $detail->kategori_warna }}</td>
                        <td>
                            @if ($detail->bagian == 'Body')
                                {{ $detail->qty }}
                            @else
                                0
                            @endif
                        </td>
                        <td>
                            @if ($detail->bagian == 'Accessories')
                                {{ $detail->qty }}
                            @else
                                0
                            @endif
                        </td>
                        <td>{{ $detail->harga }}</td>
                        <td>{{ $detail->subtotal }}</td>
                    </tr>
                @endforeach

                <tr>
                    <td colspan="7">Total Qty</td>
                    <td>{{ $total_qtyb }}</td>
                    <td>{{ $total_qty_act == 0 ? $total_qtya : $total_qty_act }}</td>
                    <td>Total</td>
                    <td>Rp. {{ number_format($total) }}</td>
                </tr>
                <tr>
                    <td colspan="11" class="uk-text-left">
                        <dl>
                            <dt>Notes</dt>
                            <dd>{{ $order->catatan_admin }}</dd>
                        </dl>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">Dibuat Oleh</td>
                    <td colspan="4">Mengetahui</td>
                    <td colspan="4">Diterima Oleh</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="uk-height-small"></div>
                    </td>
                    <td colspan="4"></td>
                    <td colspan="4"></td>
                </tr>
                <tr class="uk-text-bold">
                    <td colspan="2">SALES</td>
                    <td>SPV</td>
                    <td colspan="3">KABAG</td>
                    <td>OWNER</td>
                    <td colspan="4">CUSTOMER</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            window.print();

        });

        function closePage() {
            window.close();
        }
        window.addEventListener('afterprint', closePage);
    </script>
</body>

</html>
