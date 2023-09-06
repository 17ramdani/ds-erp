<x-app-layout>
    <section class="uk-margin-medium">
        <div class="uk-container">
            <div class="rz-panel">
                <h3>Pembayaran</h3>
                <div class="uk-margin uk-child-width-1-2@s" uk-grid>
                    <div>
                        <table class="rz-table-vertical">
                            <tr>
                                <th>No. Sales Order</th>
                                <td class="uk-table-shrink">:</td>
                                <td>{{ $pesanan['nomor'] }}</td>
                            </tr>
                            <tr>
                                <th>No. Invoice</th>
                                <td class="uk-table-shrink">:</td>
                                <td>{{ $pesanan['no_invoice'] }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td class="uk-table-shrink">:</td>
                                <td>{{ $pesanan['status']['keterangan'] }}</td>
                            </tr>
                            <tr>
                                <th>Point</th>
                                <td>:</td>
                                <td>{{ $point }} pts</td>
                            </tr>
                            <tr>
                                <th></th>
                                <td></td>
                                <td><label><input class="uk-checkbox" type="checkbox"> Bayar sebagian dengan point</label>
                                </td>
                            </tr>

                        </table>

                    </div>
                    <div>
                        <div class="uk-text-small uk-text-muted">
                            Syarat Ketentuan:
                            <ol>
                                <li>Untuk eceran, Kain yang sudah dibeli, tidak dapat diretur atau dibatalkan</li>
                                <li>Untuk Roll-an, tidak terima retur berupa kain yang sudah di-cutting</li>
                                <li>Batas Maksimal retur 3 hari setelah penerimaan barang, S.JLn retur dari Customer
                                    terlampir</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <table class="uk-table uk-table-small uk-table-divider">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tipe Pesanan</th>
                            <th>Nama Barang</th>
                            <th>Varian</th>
                            <th>Satuan</th>
                            <th>QTY</th>
                            <th class="uk-text-right">Harga</th>
                            <th class="uk-text-right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                        @endphp
                        @foreach ($pesanan['details'] as $i => $item)
                            @php
                                    if($item['satuan'] == "KG"){
                                        // $dharga = $item['tipe_kain']['harga_ecer'];
                                        $dharga = $item['harga'];
                                    }else{
                                        // $dharga = $item['tipe_kain']['harga_roll'];
                                        $dharga = $item['harga'];
                                    }

                                    if($item['satuan'] == "KG"){
                                        $subtotal1  = $item['qty_act'] * $dharga;
                                    }elseif($item['satuan'] == "ROLL"){
                                        $subtotal1  = $item['qty_act'] * 25 * $dharga;
                                    }elseif($item['satuan'] == "LOT"){
                                        $subtotal1  = $item['qty_act'] * (12 * 25) * $dharga;
                                    }else{
                                        $subtotal1  = $item['qty_act'] * $dharga;
                                    }

                                    $subtotal   = $subtotal1 - ($subtotal1 * $item['total_disc'] / 100);
                                    $total += $subtotal;
                                    $jum_qty = $item['qty_act'];
                                // $subtotal = ($item['qty'] ?? 0) * ($item['harga'] ?? 0);
                                // $total += $subtotal;
                            @endphp
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>{{ $pesanan['tipe_pesanan'] }}</td>
                                <td>
                                    <div>{{ $item['tipe_kain']['jenis_kain']['nama'] }}</div>
                                    <div>{{ $item['tipe_kain']['nama'] }}</div>
                                    <div>{{ $item['tipe_kain']['lebar']['keterangan'] }} /
                                        {{ $item['tipe_kain']['gramasi']['nama'] }}</div>
                                </td>
                                <td>{{ $item['warna_pesanan']['nama'] }}</td>
                                <td>{{ $item['satuan']}}
                                <td>{{ $item['qty_act'] }}</td>
                                </td>
                                <td class="uk-text-right">{{ number_format($item['harga']) }}</td>
                                <td class="uk-text-right">{{ number_format($subtotal) }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6"></td>
                            <td>Total</td>
                            <td class="uk-text-right">{{ number_format($total) }}</td>
                        </tr>
                        <tr>
                            <td colspan="6"></td>
                            <td>DP</td>
                            <td class="uk-text-right">{{ number_format($pesanan['dp']) }}</td>
                        </tr>
                        <tr>
                            <td colspan="6"></td>
                            <td>Grand Total</td>
                            <td class="uk-text-right">
                                @php
                                    $grand_total = $total - $pesanan['dp'];
                                @endphp
                                {{ number_format($grand_total) }}
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <div class="uk-margin-large">
                    <label class="uk-form-label">Upload Bukti Transfer</label>
                    <div class="uk-form-controls">
                        <input type="file" class="filepond uk-form-width-large" name="image_bt" id="image_bt"
                            accept="image/png, image/jpeg, image/gif">

                    </div>
                </div>
                <div class="uk-margin-medium-top uk-text-right@s">
                    <button type="button" id="button-confirm" href="#modalPaymentOK"
                        class="uk-button uk-border-rounded uk-button-primary" uk-toggle disabled>Konfirmasi
                        Pembayaran</button>
                </div>
            </div>
        </div>
    </section>

    <div id="modalPaymentOK" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-text-center">

            <button class="uk-modal-close-default" type="button" uk-close></button>

            <p>Terimakasih atas pesanan Anda</p>
            <form action="{{ route('pesanan.payment.update', $pesanan['id']) }}" method="post">
                @csrf
                @method('PATCH')
                <button type="submit" class="uk-button uk-button-primary">OK</button>
            </form>

        </div>
    </div>
    @push('css')
        <link rel="stylesheet" href="{{ asset('plugins/filepond/filepond.min.css') }}">
    @endpush
    @push('js')
        <script src="{{ asset('plugins/filepond/filepond-plugin-file-validate-type.min.js') }}"></script>
        <script src="{{ asset('plugins/filepond/filepond-plugin-file-validate-size.min.js') }}"></script>
        <script src="{{ asset('plugins/filepond/filepond.min.js') }}"></script>
    @endpush
    @push('script')
        <script>
            $(function() {
                FilePond.registerPlugin(
                    FilePondPluginFileValidateSize,
                    FilePondPluginFileValidateType
                );
                const inputElement = document.querySelector('input[type="file"]');
                const pond = FilePond.create(inputElement, {
                    maxFileSize: '50MB',
                    labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`

                });
                FilePond.setOptions({
                    server: {
                        url: "{{ route('upload.bt', $pesanan['id']) }}",
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        // process: {
                        //     onload: (res) => {
                        //         console.log(res);
                        //     }
                        // }

                    }
                });

                $('.filepond').on('FilePond:processfile', function(e) {
                    $('#button-confirm').prop('disabled', false);
                });
            });
        </script>
    @endpush
</x-app-layout>
