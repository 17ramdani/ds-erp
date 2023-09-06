<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Komplain - {{ $komplain['pesanan']['nomor'] }}</title>
    <link rel="stylesheet" href="{{ asset('plugins/uikit/css/uikit.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') . '?v=' . date('ymdhis') }}">
    <script src="{{ asset('plugins/uikit/js/uikit.min.js') }}"></script>
    <script src="{{ asset('plugins/uikit/js/uikit-icons.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
</head>

<body>
    <div class="uk-margin-large">
        <table class="rz-table-print uk-text-small">
            <tbody>
                <tr>
                    <td colspan="8">
                        <div class="uk-flex uk-flex-between">
                            <div>
                                <img src="{{ asset('assets/img/logo_toko.png') }}" alt="logo_toko"
                                    class="rz-logo-medium">
                                <div class="">
                                    PT. DUNIA SANDANG <br>
                                    Jl Terusan Pasirkoja No. 250 <br>
                                    cs@duniasandang.com
                                </div>
                            </div>
                            <div class="uk-padding">
                                <h4>Form Complain Customer</h4>
                            </div>
                        </div>
                        <div class="uk-margin-medium-bottom">
                            <div class="uk-flex uk-flex-between">
                                <div>
                                    <dl class="rz-table-faux">
                                        <dt>Tanggal</dt>
                                        <dd>{{ date_format(date_create($komplain['tanggal']), 'd/m/Y') }}</dd>
                                    </dl>
                                    <dl class="rz-table-faux">
                                        <dt>Nama Customer</dt>
                                        <dd>{{ $komplain['pesanan']['customer']['nama'] }}</dd>
                                    </dl>
                                    <dl class="rz-table-faux">
                                        <dt>No. SO/DO/INV</dt>
                                        <dd>{{ $komplain['pesanan']['nomor'] }}</dd>
                                    </dl>
                                </div>
                                <div>
                                    <dl class="rz-table-faux uk-margin-right">
                                        <dt>No. Telp</dt>
                                        <dd>{{ $komplain['pesanan']['customer']['notlp'] . ' - ' . $komplain['pesanan']['customer']['nohp'] }}
                                        </dd>
                                    </dl>
                                </div>
                            </div>


                        </div>
                    </td>
                </tr>

                <tr class="uk-text-bold">
                    <td>No</td>
                    <td>Nama Barang / LOT</td>
                    <td>Warna Barang</td>
                    <td>Lebar</td>
                    <td>Gramasi</td>
                    <td>Bagian</td>
                    <td>Qty</td>
                    <td>Unit</td>
                </tr>
                @foreach ($komplain['komplain_details'] as $i => $komplain_detail)
                    @if ($komplain_detail['detail']['bagian'] == 'body')
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $komplain_detail['detail']['tipe_kain']['nama'] . ' / ' . $komplain_detail['detail']['barang_lot_id'] }}
                            </td>
                            <td>{{ $komplain_detail['detail']['tipe_kain']['warna']['nama'] }}</td>
                            <td>{{ $komplain_detail['detail']['tipe_kain']['lebar']['keterangan'] }}</td>
                            <td>{{ $komplain_detail['detail']['tipe_kain']['gramasi']['nama'] }}</td>
                            <td>{{ $komplain_detail['detail']['bagian'] }}</td>
                            <td>{{ $komplain_detail['detail']['qty_act'] }}</td>
                            <td>{{ $komplain_detail['detail']['satuan'] }}</td>
                        </tr>
                    @else
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $komplain_detail['detail']['tipe_kain_accessories']['accessories']['name'] . ' / ' . $komplain_detail['detail']['barang_lot_id'] }}
                            </td>
                            <td>{{ $komplain_detail['detail']['warna_pesanan']['nama'] }}</td>
                            <td>-</td>
                            <td>-</td>
                            <td>{{ $komplain_detail['detail']['bagian'] }}</td>
                            <td>{{ $komplain_detail['detail']['qty_act'] }}</td>
                            <td>{{ $komplain_detail['detail']['satuan'] }}</td>
                        </tr>
                    @endif
                @endforeach
                <tr>
                    <td colspan="8">
                        <div class="uk-margin">
                            <label for="" class="uk-form-label">Keluhan</label>
                            <textarea rows="4" class="uk-textarea" placeholder="Lorem ipsum dolor sit amet, consectetur.">{{ $komplain['keterangan'] }}</textarea>
                        </div>

                    </td>
                </tr>
                <tr>
                    <td colspan="8">
                        <div class="uk-margin">
                            <label for="" class="uk-form-label">Analisa Penyebab Masalah</label>
                            <textarea rows="4" class="uk-textarea" placeholder="Lorem ipsum dolor sit amet, consectetur.">{{ $komplain['analisa'] }}</textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="8">
                        <div class="uk-margin">
                            <label for="" class="uk-form-label">Tindakan Perbaikan</label>
                            <textarea rows="4" class="uk-textarea" placeholder="Lorem ipsum dolor sit amet, consectetur.">{{ $komplain['tindakan'] }}</textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">Dibuat Oleh,<br><br><br>xxx</td>
                    <td colspan="2">Mengetahui,<br><br><br>xxx</td>
                    <td colspan="4">Menyetujui,<br><br><br>xxx</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                    <td colspan="4"></td>
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
