<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Sales &amp; Marketing</h3>
                </div>

                <div class="">
                    <x-alert />
                    <div class="rz-panel">
                        <h4>Fresh Order <span uk-icon="chevron-right"></span> <span class="uk-text-light">Detail
                                Pesanan</span></h4>
                        <form action="{{ route('fresh-order.update', $order->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="uk-child-width-1-2@s uk-grid-medium" uk-grid>
                                <div>
                                    <table class="rz-table-vertical">
                                        <tr>
                                            <th>No. Pesanan</th>
                                            <td class="uk-table-shrink">:</td>
                                            <td>{{ $order->nomor }}</td>
                                        </tr>
                                        <tr>
                                            <th>Customer</th>
                                            <td class="uk-table-shrink">:</td>
                                            <td>{{ $order->customer->nama }}</td>
                                        </tr>
                                        <tr>
                                            <th>Sales</th>
                                            <td class="uk-table-shrink">:</td>
                                            <td>
                                                <select class="uk-select uk-form-small" name="sales" required>
                                                    @foreach ($salesmans as $salesman)
                                                        <option value="{{ $salesman->id }}"
                                                            @selected($salesman->id == $order->sales_man_id)>
                                                            {{ $salesman->nama }}</option>
                                                    @endforeach

                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="uk-text-nowrap">Catatan Pembayaran</th>
                                            <td>:</td>
                                            <td>{{ $order->catatan_pembayaran }}</td>
                                        </tr>
                                        <tr>
                                            <th>Bukti Transfer</th>
                                            <td>:</td>
                                            <td><a href="#modalBuktiTransfer" uk-toggle>View</a></td>
                                        </tr>
                                        <!--
                              <tr>
                                <th></th>
                                <td></td>
                                <td>
                                    <div class="js-upload uk-margin-small" uk-form-custom>
                                        <input type="file" multiple>
                                        <button class="uk-button uk-button-default uk-button-small" type="button" tabindex="-1">Upload</button>
                                    </div>
                                    <div class="js-upload" uk-form-custom>
                                        <input type="file" multiple>
                                        <button class="uk-button uk-button-default uk-button-small" type="button" tabindex="-1">Upload Transfer Pelunasan</button>
                                    </div>
                                </td>
                              </tr>
                              -->
                                    </table>
                                </div>
                                <div>
                                    <table class="rz-table-vertical">
                                        <!--
                               <tr>
                                <th>Tanggal Kebutuhan</th>
                                <td class="uk-table-shrink">:</td>
                                <td>Feb 25, 2023</td>
                              </tr>
                              -->
                                        <tr>
                                            <th>Status</th>
                                            <td class="uk-table-shrink">:</td>
                                            <td>
                                                <select class="uk-select uk-form-small" name="status" required>
                                                    <option @selected($order->status == 'Draft')>Draft</option>
                                                    <option @selected($order->status == 'Approved')>Approved</option>
                                                    <option @selected($order->status == 'Invoicing')>Invoicing</option>
                                                    <option @selected($order->status == 'Delivery')>Delivery</option>
                                                    <option @selected($order->status == 'LO')>LO</option>
                                                    <option @selected($order->status == 'Done')>Done</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tipe Pesanan</th>
                                            <td class="uk-table-shrink">:</td>
                                            <td>
                                                <select class="uk-select uk-form-small" name="tipe_pesanan">
                                                    <option @selected($order->tipe_pesanan == 'Fresh Order')>Fresh Order</option>
                                                    <option @selected($order->tipe_pesanan == 'Development')>Development</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Pesanan</th>
                                            <td class="uk-table-shrink">:</td>
                                            <td>
                                                <select class="uk-select uk-form-small" name="jenis_pesanan">
                                                    <option @selected($order->tipe_pesanan == 'Reguler')>Reguler</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Kategori Pesanan</th>
                                            <td class="uk-table-shrink">:</td>
                                            <td>
                                                <select class="uk-select uk-form-small" name="kategori_pesanan">
                                                    <option @selected($order->tipe_pesanan == 'Normal')>Normal</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Kirim</th>
                                            <td class="uk-table-shrink">:</td>
                                            <td><input type="date" class="uk-input uk-form-small"
                                                    name="tanggal_kirim" value="{{ $order->tanggal_kirim }}">

                                            </td>
                                        </tr>
                                    </table>
                                </div>


                            </div>
                            <div class="uk-overflow-auto uk-margin-medium-top">
                                <h4>Detail Barang</h4>
                                <table class="uk-table uk-table-small uk-table-striped">
                                    <thead>
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Grm</th>
                                            <th>Lbr</th>
                                            <th>Warna</th>
                                            <th>Kat. Warna</th>
                                            <th class="rz-table-col-m">Roll</th>
                                            <th class="rz-table-col-m">Qty (kg)</th>
                                            <th>Harga</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody class="uk-text-small">
                                        @foreach ($order['details'] as $i => $detail)
                                            <input type="hidden" id="pdd_id{{ $i }}" name="dids[]"
                                                value="{{ $detail->id }}">
                                            <tr>
                                                <td><input type="text" id="kode{{ $i }}" name="kode[]"
                                                        value="{{ $detail->kode ?? '-' }}"
                                                        class="uk-input uk-form-small kode">
                                                </td>
                                                <td><input type="text" name="nama[]" value="{{ $detail->nama }}"
                                                        class="uk-input uk-form-small"></td>
                                                <td><input type="text" name="gramasi[]"
                                                        value="{{ $detail->gramasi }}" class="uk-input uk-form-small">
                                                </td>
                                                <td><input type="text" name="lebar[]" value="{{ $detail->lebar }}"
                                                        class="uk-input uk-form-small"></td>
                                                <td><input type="text" name="warna[]" value="{{ $detail->warna }}"
                                                        class="uk-input uk-form-small"></td>
                                                <td><input type="text" id="katwarna{{ $i }}"
                                                        name="katwarna[]" value="{{ $detail->kategori_warna ?? '-' }}"
                                                        class="uk-input uk-form-small katwarna"></td>
                                                <td><input type="number" name="qty[]" value="{{ $detail->qty }}"
                                                        class="uk-input uk-form-small readonly-input" min="0"
                                                        readonly></td>
                                                <td><input type="number" id="qtyact{{ $i }}"
                                                        name="qtyact[]" value="{{ $detail->qty_act ?? 0 }}"
                                                        class="uk-input uk-form-small" min="0" step="0.01"
                                                        onchange="hitung({{ $i }})">
                                                </td>
                                                <td><input type="text" id="harga{{ $i }}" name="harga[]"
                                                        value="{{ $detail->harga ?? 0 }}"
                                                        class="uk-input uk-form-small harga{{ $detail->bagian }}"
                                                        onchange="hitung({{ $i }})">
                                                </td>
                                                <td><input type="text" id="subtotal{{ $i }}"
                                                        name="subtotal[]" value="{{ $detail->subtotal ?? 0 }}"
                                                        class="uk-input uk-form-small formated subtotal readonly-input"
                                                        readonly>
                                                </td>

                                            </tr>
                                        @endforeach


                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="10"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" rowspan="3">
                                                <label>Catatan Konsumen</label>
                                                <textarea rows="2" class="uk-textarea uk-form-small"
                                                    placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing." disabled>{{ $order->keterangan }}</textarea>
                                            </td>
                                            <td></td>
                                            <td colspan="2">Total</td>
                                            <td><input type="text" id="total" name="total"
                                                    value="{{ number_format($order->total) }}"
                                                    class="uk-input uk-form-small formated readonly-input" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td colspan="2">Ongkir</td>
                                            <td><input type="text" id="ongkir" name="ongkir"
                                                    value="{{ number_format($order->ongkir) }}"
                                                    class="uk-input uk-form-small formated" onchange="hitungTotal()">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td colspan="2">Grand Total<br></td>
                                            <td><input type="text" id="grand_total" name="grand_total"
                                                    value="{{ number_format($order->grand_total) }}"
                                                    class="uk-input uk-form-small formated readonly-input" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6" rowspan="3">
                                                <label>Catatan Admin</label>
                                                <textarea rows="2" name="catatan_admin" class="uk-textarea uk-form-small">{{ $order->catatan_admin }}</textarea>
                                            </td>
                                            <td></td>
                                            <td colspan="2">DP</td>
                                            <td><input type="text" id="dp" name="dp"
                                                    value="{{ number_format($order->dp) }}"
                                                    class="uk-input uk-form-small formated" onchange="hitungTotal()">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td colspan="2">Pelunasan</td>
                                            <td><input type="text" id="pelunasan" name="pelunasan"
                                                    value="{{ number_format($order->pelunasan) }}"
                                                    class="uk-input uk-form-small formated" onchange="hitungTotal()">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td colspan="2">Sisa Pembayaran</td>
                                            <td><input type="text" id="sisa_pembayaran" name="sisa_pembayaran"
                                                    value="{{ number_format($order->sisa_pembayaran) }}"
                                                    class="uk-input uk-form-small readonly-input formated" readonly>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="uk-margin-medium-top uk-flex uk-flex-between">
                                <div>
                                    <button type="submit" name="but_save" value="save"
                                        class="uk-button uk-border-rounded uk-margin-small-right uk-button-default">Simpan</button>
                                    <button type="submit" name="but_submit" value="submit"
                                        class="uk-button uk-border-rounded uk-button-primary">Submit</button>
                                </div>
                                <div>
                                    <a href="{{ route('fresh-order.cetak', $order->id) }}" target="_blank"
                                        class="uk-button uk-border-rounded uk-margin-small-right uk-button-default"
                                        uk-toggle>Cetak</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>




        </div>
    </main>

    <div id="modalBuktiTransfer" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

            <button class="uk-modal-close-default" type="button" uk-close></button>

            <div class="uk-child-width-1-2" uk-grid>
                <div>
                    <h5>DP</h5>
                    <img src="{{ $order->bukti_dp }}" alt="bukti">
                </div>
                <div>
                    <h5>Pelunasan</h5>
                    <img src="{{ $order->bukti_pelunasan }}" alt="bukti">
                </div>
            </div>

        </div>
    </div>
    @push('css')
        <style>
            .uk-input.uk-form-small.readonly-input {
                background-color: #f0f0f0;
                color: #333;
                cursor: not-allowed;
                pointer-events: none;
            }
        </style>
    @endpush
    @push('script')
        <script>
            var qtyAct, harga, subTotal, total, ongkir, dp, grandTotal, pelunasan, sisaPembayaran;

            $('#kode0').on('change', function() {
                $('.kode').val($(this).val());
            });

            $('#katwarna0').on('change', function() {
                $('.katwarna').val($(this).val());
            });

            $('.hargaBody').number(true);
            $('.hargaAccessories').number(true);
            $('.subtotal').number(true);
            $('.formated').number(true);

            $('#harga0').on('change keyup', function() {
                $('.hargaBody').val($(this).val());
                let i = 0
                $('.subtotal').each(function() {
                    hitung(i);
                    i++;
                });
            });

            function hitung(index) {
                qtyAct = parseFloat($('#qtyact' + index).val());
                harga = parseInt($('#harga' + index).val());
                subTotal = qtyAct * harga;
                $('#subtotal' + index).val(subTotal);
                // console.log(qtyAct + '*' + harga + '=' + subTotal);
                hitungTotal();
            }

            function hitungTotal() {
                total = 0;
                $('.subtotal').each(function() {
                    total += parseInt($(this).val());
                });
                $('#total').val(total);
                ongkir = parseInt($('#ongkir').val());
                grandTotal = total + ongkir;
                $('#grand_total').val(grandTotal);
                dp = parseInt($('#dp').val());
                pelunasan = parseInt($('#pelunasan').val());
                sisaPembayaran = grandTotal - (dp + pelunasan);
                $('#sisa_pembayaran').val(sisaPembayaran);
            }
        </script>
    @endpush
</x-app-layout>
