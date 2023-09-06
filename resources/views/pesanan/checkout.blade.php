<x-app-layout>
    <section class="uk-margin-medium">
        <div class="uk-container">
            <div class="rz-panel">
                <h3>Checkout</h3>
                <div class="uk-overflow-auto uk-margin-medium-top">
                    <table class="uk-table uk-table-small uk-table-striped">
                        <thead>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Grm</th>
                                <th>Lbr</th>
                                <th>Warna</th>
                                <th>Qty Est.</th>
                                <th>Qty Act.</th>
                                <th>Stn</th>
                                <th>Harga</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total = 0;
                            @endphp
                            @foreach ($pesanan['details'] as $item)
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
                                    <td>{{ $item['tipe_kain']['kode'] }}</td>
                                    <td>{{ $item['tipe_kain']['nama'] }}</td>
                                    <td>{{ $item['tipe_kain']['gramasi']['nama'] }}</td>
                                    <td>{{ $item['tipe_kain']['lebar']['keterangan'] }}</td>
                                    <td>{{ $item['warna_pesanan']['nama'] }}</td>
                                    <td>{{ $item['qty'] }}</td>
                                    <td>{{ $item['qty_act'] }}</td>
                                    <td>{{ $item['satuan']}}
                                    </td>
                                    <td>{{ number_format($item['harga']) }}</td>
                                    <td class="uk-text-right">{{ number_format($subtotal) }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="8"></td>
                                <td>Total</td>
                                <td class="uk-text-right">{{ number_format($total) }}</td>
                            </tr>
                            <tr>
                                <td colspan="8"></td>
                                <td>DP</td>
                                <td class="uk-text-right">{{ number_format($pesanan['dp']) }}</td>
                            </tr>
                            <tr>
                                <td colspan="8"></td>
                                <td>Grand Total</td>
                                <td class="uk-text-right">
                                    @php
                                        $grand_total = $total - $pesanan['dp'];
                                    @endphp
                                    {{ number_format($grand_total) }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="uk-margin uk-child-width-1-2@s" uk-grid>
                    <div>
                        <form class="uk-form-stacked">


                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-stacked-select">Pembayaran</label>
                                <div class="uk-form-controls">
                                    <label><input class="uk-radio" type="radio" name="metode" value="kontan" checked>
                                        Kontan</label><br>
                                    <label><input class="uk-radio" type="radio" name="metode" value="buyfinancing"
                                            disabled>
                                        Buyer
                                        Financing</label>
                                </div>
                            </div>


                            <div class="uk-margin-medium-top">
                                <a id="button-lanjut" href="{{ route('pesanan.payment', $pesanan['id']) }}"
                                    class="uk-button uk-border-rounded uk-button-primary">Lanjut</a>
                            </div>


                        </form>
                    </div>
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('script')
        <script>
            let linkLanjut = "/pesanan/payment/" + "{{ $pesanan['id'] }}";
            $('input[name="metode"]').on('click', function() {
                let value = $(this).val();
                if (value == "buyfinancing") {
                    linkLanjut = "#";
                } else {
                    linkLanjut = "/pesanan/payment/" + "{{ $pesanan['id'] }}";
                }
                $('#button-lanjut').attr('href', linkLanjut);
            });
        </script>
    @endpush
</x-app-layout>
