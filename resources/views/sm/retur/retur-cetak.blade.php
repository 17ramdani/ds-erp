<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Retur</title>
    <link rel="stylesheet" href="{{ asset('plugins/uikit/css/uikit.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') . '?v=' . date('ymdhis') }}">
</head>

<body>
    <div class="uk-margin-large">
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
            <h3>Nota Retur</h3>
            <div class="uk-child-width-1-2@s" uk-grid>
                <div>
                    <table class="rz-table-vertical">
                        <tr>
                            <th class="uk-text-nowrap">No. Faktur</th>
                            <td class="uk-table-shrink">:</td>
                            <td class="uk-width-expand">{{ $data->pesanan->no_invoice }}</td>
                        </tr>
                        <tr>
                            <th class="uk-text-nowrap">Tgl. Faktur</th>
                            <td class="uk-table-shrink">:</td>
                            <td>{{ date_format(date_create($data->pesanan->tanggal_pesanan), 'd-m-Y') }}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td class="uk-table-shrink">:</td>
                            <td>{{ $data->pesanan->alamat_kirim }}</td>
                        </tr>
                    </table>
                </div>
                <div>
                    <table class="rz-table-vertical">
                        <tr>
                            <th>Pelanggan</th>
                            <td class="uk-table-shrink">:</td>
                            <td class="uk-width-expand">{{ $data->pesanan->customer->nama }}</td>
                        </tr>
                        <tr>
                            <th>Telephone</th>
                            <td class="uk-table-shrink">:</td>
                            <td>{{ $data->pesanan->customer->notlp . ' - ' . $data->pesanan->customer->nohp }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <table class="uk-table uk-table-small uk-table-striped rz-table-small-override">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Barang</th>
                        <th>Corak</th>
                        <th>Lot No</th>
                        {{-- <th>Kg</th> --}}
                        <th>Roll</th>
                        <th>Pcs</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data->retur_details as $index => $rdetail)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $rdetail->detail_pesanan->tipe_kain->nama }}<br></td>
                            <td>{{ $rdetail->detail_pesanan->tipe_kain->warna->nama }}</td>
                            <td>{{ $rdetail->detail_pesanan->barang_lot_id }}</td>
                            {{-- <td>0</td> --}}
                            <td>1</td>
                            <td>{{ $rdetail->detail_pesanan->qty_act . ' ' . $rdetail->detail_pesanan->satuan }}</td>
                            <td>108450</td>
                        </tr>
                    @endforeach


                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2">Terbilang</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Sub Total</td>
                        <td>35,142,571</td>
                    </tr>
                    <tr>
                        <td colspan="6">TIGA PULUH LIMA JUTA SERATUS EMPAT PULUH DUA RIBU ENAM RATUS</td>
                        <td>Grand Total</td>
                        <td>35,142,600</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="uk-margin">
            <!--  SIGNATURES -->
            <div class="uk-margin-medium uk-child-width-1-4@m uk-child-width-1-2" uk-grid>
                <div>
                    <dl class="rz-signatures">
                        <dt>Diterima</dt>
                        <dd>xxx</dd>
                    </dl>
                </div>
                <div>

                </div>
                <div>

                </div>
                <div>
                    <dl class="rz-signatures">
                        <dt>Hormat Kami</dt>
                        <dd>xxx</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('plugins/uikit/js/uikit.min.js') }}"></script>
    <script src="{{ asset('plugins/uikit/js/uikit-icons.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
</body>

</html>
