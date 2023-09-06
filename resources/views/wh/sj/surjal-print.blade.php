<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $data->no_sj }}</title>
    <link rel="stylesheet" href="{{ asset('plugins/uikit/css/uikit.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@200;300;400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') . '?v=' . date('ymdhis') }}">
</head>

<body>
    <div class="uk-margin">
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
        <h4>Surat Jalan</h4>
        <div class="uk-child-width-1-2" uk-grid>
            <div>
                <table class="rz-table-vertical">
                    <tr>
                        <th class="uk-text-nowrap">No. Invoice</th>
                        <td class="uk-table-shrink">:</td>
                        <td>{{ $data->pesanan->no_invoice }}</td>
                    </tr>
                    <tr>
                        <th>Customer</th>
                        <td class="uk-table-shrink">:</td>
                        <td>{{ $data->pesanan->customer->nama }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td class="uk-table-shrink">:</td>
                        <td>{{ $data->pesanan->alamat_kirim }}</td>
                    </tr>
                    <tr>
                        <th>Tel/Fax</th>
                        <td class="uk-table-shrink">:</td>
                        <td>{{ $data->pesanan->customer->notlp . ' - ' . $data->pesanan->customer->nohp }}
                        </td>
                    </tr>
                </table>
            </div>
            <div>
                <table class="rz-table-vertical">
                    <tr>
                        <th>Tanggal Order</th>
                        <td class="uk-table-shrink">:</td>
                        <td>{{ date_format(date_create($data->pesanan->tanggal_pesanan), 'M d, Y') }}
                        </td>
                    </tr>
                    <tr>
                        <th>Jumlah Barang</th>
                        <td class="uk-table-shrink">:</td>
                        <td>{{ count($data->pesanan->details) . ' Item' }}</td>
                    </tr>
                </table>
            </div>


        </div>
        <div class="uk-overflow-auto uk-margin-medium-top">
            <h4>Detail Barang</h4>
            <table class="uk-table uk-table-small uk-table-striped rz-table-small-override">
                <thead>
                    <tr>
                        <th>Jenis Barang</th>
                        <th>Lebar/Gramasi</th>
                        <th>Warna</th>
                        <th>Lot No</th>
                        {{-- <th>Kode Roll</th> --}}
                        <th>Qty</th>
                        <th>Satuan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data->pesanan->details as $detail)
                        <tr>
                            <td>{{ ($detail->tipe_kain->jenis->nama ?? '-') . ' - ' . ($detail->tipe_kain->nama ?? '-') }}
                            </td>
                            <td>{{ ($detail->tipe_kain->lebar->keterangan ?? '-') . '/' . ($detail->tipe_kain->gramasi->nama ?? '-') }}
                            </td>
                            <td>{{ $detail->tipe_kain->warna->nama ?? '-' }}</td>
                            <td>{{ $detail->barang_lot_id }}</td>
                            {{-- <td>1</td> --}}
                            <td>{{ $detail->qty_act }}</td>
                            <td>{{ $detail->tipe_kain->satuan->keterangan ?? '-' }}</td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

        <!--  SIGNATURES -->

        <div class="uk-margin-large-top uk-child-width-1-3" uk-grid>
            <div>
                <dl class="rz-signatures">
                    <dt>Diserahkan Oleh</dt>
                    <dd>(..........) <br>
                        (Gudang)
                    </dd>
                </dl>
            </div>
            <div>
                <dl class="rz-signatures">
                    <dt>Pembawa</dt>
                    <dd>(..........) <br>
                        (Supir Ekspedisi)
                    </dd>
                </dl>
            </div>
            <div>
                <dl class="rz-signatures">
                    <dt>Penerima</dt>
                    <dd>(..........) <br>
                        (Customer)
                    </dd>
                </dl>
            </div>

        </div>
        <div class="uk-margin-top uk-child-width-1-2" uk-grid>
            <div>
                <dl class="rz-signatures">
                    <dt>Mengetahui</dt>
                    <dd>(..........) <br>
                    </dd>
                </dl>
            </div>
            <div>
                <dl class="rz-signatures">
                    <dt>Satpam</dt>
                    <dd>(..........) <br>
                        (Satpam)
                    </dd>
                </dl>
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
