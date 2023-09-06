<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pesanan->no_invoice }}</title>
    <link rel="stylesheet" href="{{ asset('plugins/uikit/css/uikit.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@200;300;400;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') . '?v=' . date('ymdhis') }}">
</head>

<body>
    <div class="uk-margin" id="body-print">
        <div>
            <div class="uk-child-width-1-2" uk-grid>
                <div>
                    <img src="{{ asset('assets/img/logo_toko.png') }}" class="rz-logo-medium" alt="">
                </div>
                <div>
                    <address class="uk-text-small uk-text-right">
                        <div class="uk-text-bold">PT DUNIA SANDANG PRATAMA</div>

                        NPWP : 63.049.676.8-422.000 <br>
                        Jl. Trs Pasirkoja No. 250 (022) 6003309 <br>
                        Customer Service : 0813 8888 5262 <br>
                        Hotline : 081222776523 <br>
                        IG : @duniasandang <br>
                        cs@duniasandang.com <br>
                    </address>
                </div>
            </div>
            <div class="uk-margin-large">
                <div class="uk-width-1-2@s">
                    <h3>Invoice</h3>
                    <table class="rz-table-vertical">
                        <tr>
                            <th class="uk-text-nowrap">No. Invoice</th>
                            <td class="uk-table-shrink">:</td>
                            <td>{{ $pesanan->no_invoice }}</td>
                        </tr>
                        <tr>
                            <th>Customer</th>
                            <td class="uk-table-shrink">:</td>
                            <td>{{ $pesanan->customer->nama }}</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td class="uk-table-shrink">:</td>
                            <td>{{ date_format(date_create($pesanan->tanggal_pesanan), 'd/m/Y') }}</td>
                        </tr>
                    </table>
                    {{-- <div class="uk-text-light">INV.123456789</div> --}}
                </div>
                <table class="uk-table uk-table-small uk-table-striped rz-table-small-override">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Barang</th>
                            <th>Quantity</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                            <th class="uk-text-right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                            $totalDisc = 0;
                            $ppn = 0;
                            $grandTotal = 0;
                            $priceBeforePpn = 0;
                            $priceAfterPpn = 0;
                            $ppnPerPrice = 0;
                            $subTotalPpn = 0;
                            $subTotalAfterPpn = 0;
                        @endphp
                        @foreach ($pesanan->details as $index => $detail)
                            @php
                                $ppnPerPrice = ($detail->harga * 11) / 100;
                                $priceAfterPpn = $detail->harga - $ppnPerPrice;
                                $subTotal = $detail->qty_act * $priceAfterPpn;
                                $subTotalAfterPpn = $detail->qty_act * $detail->harga;
                                $total += $subTotal;
                                $subTotalPpn = $detail->qty_act * $ppnPerPrice;
                                $ppn += $subTotalPpn;
                                if (isset($detail->total_disc)) {
                                    if ($detail->jenis_disc == 'Persen') {
                                        $disc = ($subTotalAfterPpn * $detail->total_disc) / 100;
                                    } else {
                                        $disc = $subTotalAfterPpn - $detail->total_disc;
                                    }
                                    $totalDisc += $disc;
                                }
                                
                            @endphp
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $detail->tipe_kain->nama ?? '-' }}</td>
                                <td>{{ $detail->qty_act }}</td>
                                <td>{{ $detail->tipe_kain->satuan->keterangan }}</td>
                                <td>{{ number_format($priceAfterPpn) }}</td>
                                <td class="uk-text-right">{{ number_format($subTotal) }}</td>
                            </tr>
                        @endforeach
                        @foreach ($pesanan->detail_accs as $detail_acc)
                            @php
                                $ppnPerPrice = ($detail_acc->harga * 11) / 100;
                                $priceAfterPpn = $detail_acc->harga - $ppnPerPrice;
                                $subTotal = $detail_acc->qty_act * $priceAfterPpn;
                                $subTotalAfterPpn = $detail_acc->qty_act * $detail_acc->harga;
                                $total += $subTotal;
                                $subTotalPpn = $detail_acc->qty_act * $ppnPerPrice;
                                $ppn += $subTotalPpn;
                                if (isset($detail_acc->total_disc)) {
                                    if ($detail_acc->jenis_disc == 'Persen') {
                                        $disc = ($subTotalAfterPpn * $detail_acc->total_disc) / 100;
                                    } else {
                                        $disc = $subTotalAfterPpn - $detail_acc->total_disc;
                                    }
                                    $totalDisc += $disc;
                                }
                                
                            @endphp
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $detail_acc->tipe_kain_accessories->accessories->name ?? '-' }}</td>
                                <td>{{ $detail_acc->qty_act }}</td>
                                <td>{{ 'KG' }}</td>
                                <td>{{ number_format($priceAfterPpn) }}</td>
                                <td class="uk-text-right">{{ number_format($subTotal) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4">Sales :
                                @php
                                    $salesMan = \App\Models\Pesanan\SalesMan::find($pesanan->sales_man_id)->nama;
                                @endphp
                                {{ $salesMan }}
                            </td>
                            <td>Ongkir</td>
                            <td class="uk-text-right">{{ number_format($pesanan->ongkir) }}</td>
                        </tr>
                        <tr>
                            <td colspan="4" rowspan="5"></td>
                            <td>Subtotal</td>
                            <td class="uk-text-right">{{ number_format($total) }}</td>
                        </tr>
                        <tr>
                            <td>Discount</td>
                            <td class="uk-text-right">{{ number_format($totalDisc) }}</td>
                        </tr>
                        <tr>
                            <td>PPN (11%)</td>
                            <td class="uk-text-right">{{ number_format($ppn) }}</td>
                        </tr>
                        <tr>
                            <td>DP</td>
                            <td class="uk-text-right">{{ number_format($pesanan->dp) }}</td>
                        </tr>
                        <tr class="uk-text-bold">
                            <td>Total</td>
                            <td class="uk-text-right">
                                @php
                                    $grandTotal = $total + $ppn - $totalDisc + $pesanan->ongkir - $pesanan->dp;
                                @endphp
                                {{ number_format($grandTotal) }}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="uk-margin">
                <!--  SIGNATURES -->
                <div class="uk-margin-medium uk-child-width-1-4@m uk-child-width-1-2" uk-grid>
                    <div>
                        <dl class="rz-signatures">
                            <dt>Mengetahui</dt>
                            <dd>(.........)</dd>
                        </dl>
                    </div>
                    <div>
                        <dl class="rz-signatures">
                            <dt>Yang Menyerahkan</dt>
                            <dd>(.........)</dd>
                        </dl>
                    </div>
                    <div>
                        <dl class="rz-signatures">
                            <dt>Security</dt>
                            <dd>(.........)</dd>
                        </dl>
                    </div>
                    <div>
                        <dl class="rz-signatures">
                            <dt>Menerima</dt>
                            <dd>(.........)</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="uk-margin uk-text-small uk-text-meta">
                Syarat &amp; Ketentuan:
                <ol>
                    <li>Kain yang sudah dicutting tidak bisa di retur</li>
                    <li>Batas maksimal retur 3 hari setelah barang diterima (invoice harus dilampirkan)</li>
                    <li>Biaya kirim merupakan tanggung jawab cutomer</li>
                </ol>
            </div>
        </div>
    </div>

    <script src="{{ asset('plugins/uikit/js/uikit.min.js') }}"></script>
    <script src="{{ asset('plugins/uikit/js/uikit-icons.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

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
