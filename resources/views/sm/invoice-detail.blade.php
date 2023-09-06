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
                        <h4>Invoice Retail</h4>
                        <div class="uk-child-width-1-2@s uk-grid-large" uk-grid>
                            <div>
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
                                        <th>Alamat</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ $pesanan->alamat_kirim }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tel/Fax</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ $pesanan->customer->notlp . ' / ' . $pesanan->customer->nohp }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table class="rz-table-vertical">
                                    <tr>
                                        <th>Tanggal Order</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ date_format(date_create($pesanan->tanggal_pesanan), 'M d, Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jumlah Barang</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ count($pesanan->details) . ' Item' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>
                                            @if ($pesanan->is_lunas == 1)
                                                <span class="uk-label uk-label-success">Sudah Dibayar</span>
                                            @else
                                                <span class="uk-label uk-label-warning">Belum Dibayar</span>
                                            @endif

                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td class="uk-table-shrink"></td>
                                        <td>
                                            <a onclick="openModalStatusPayment(this)" data-id="{{ $pesanan->id }}"
                                                class="uk-button uk-button-small uk-button-default uk-border-rounded">Edit</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>


                        </div>
                        <div class="uk-overflow-auto uk-margin-medium-top">
                            <h4>Detail Barang</h4>
                            <table class="uk-table uk-table-small uk-table-striped rz-table-small-override">
                                <thead>
                                    <tr>
                                        <th>Desc</th>
                                        <th class="uk-table-shrink">Amount</th>
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
                                    @foreach ($pesanan->details as $detail)
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
                                            <td>
                                                <div>
                                                    {{ ($detail->tipe_kain->nama ?? '-') . '.' . ($detail->tipe_kain->warna->nama ?? '-') . '.' . ($detail->tipe_kain->lebar->keterangan ?? '-') . '.' . ($detail->tipe_kain->gramasi->nama ?? '-') . '.' }}
                                                </div>
                                                <div>
                                                    {{ $detail->qty_act . ' X ' . number_format($priceAfterPpn) }}
                                                </div>
                                            </td>
                                            <td>{{ number_format($subTotal) }}</td>
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
                                            <td>
                                                <div>
                                                    {{ $detail_acc->tipe_kain_accessories->accessories->name ?? '-' }}
                                                    - {{ $detail_acc->warna_pesanan->nama }}
                                                </div>
                                                <div>
                                                    {{ $detail_acc->qty_act . ' X ' . number_format($priceAfterPpn) }}
                                                </div>
                                            </td>
                                            <td>{{ number_format($subTotal) }}</td>
                                        </tr>
                                    @endforeach


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>Ongkir</td>
                                        <td class="uk-text-right">{{ number_format($pesanan->ongkir) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td class="uk-text-right">{{ number_format($total) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Potongan</td>
                                        <td class="uk-text-right">{{ number_format($totalDisc) }}</td>
                                    </tr>
                                    <tr>
                                        <td>PPN (11%)</td>
                                        <td class="uk-text-right">
                                            {{ number_format($ppn) }}</td>
                                    </tr>
                                    <tr>
                                        <td>DP</td>
                                        <td class="uk-text-right">{{ number_format($pesanan->dp) }}</td>
                                    </tr>
                                    <tr class="uk-text-bold">
                                        <td>Grand Total</td>
                                        <td class="uk-text-right">
                                            @php
                                                // $grandTotal = $total + $ppn - ($pesanan->dp + $pesanan->ongkir);
                                                $grandTotal = $total + $ppn - $totalDisc + $pesanan->ongkir - $pesanan->dp;
                                            @endphp
                                            {{ number_format($grandTotal) }}
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <!--  SIGNATURES -->
                        <div class="uk-margin-medium uk-child-width-1-4@m uk-child-width-1-2" uk-grid>
                            <div>
                                <dl class="rz-signatures">
                                    <dt>Mengetahui</dt>
                                    <dd>(..........)</dd>
                                </dl>
                            </div>
                            <div>
                                <dl class="rz-signatures">
                                    <dt>Yang Menyerahkan</dt>
                                    <dd>(..........)</dd>
                                </dl>
                            </div>
                            <div>
                                <dl class="rz-signatures">
                                    <dt>Security</dt>
                                    <dd>(..........)</dd>
                                </dl>
                            </div>
                            <div>
                                <dl class="rz-signatures">
                                    <dt>Menerima</dt>
                                    <dd>(..........)</dd>
                                </dl>
                            </div>

                        </div>
                        <div class="uk-margin-large-top uk-flex uk-flex-between">
                            <div>
                                <a href="#modalPaymentDocument" class="uk-button uk-button-default uk-border-rounded"
                                    uk-toggle>Bukti Pembayaran</a>

                            </div>
                            <div>
                                <a target="_blank" href="{{ route('invoice.cetak', ['id' => $pesanan->id]) }}"
                                    class="uk-button uk-button-primary uk-border-rounded"><span
                                        class="uk-margin-small-right" uk-icon="print"></span>Print</a>

                            </div>


                        </div>
                    </div>
                </div>

            </div>




        </div>
    </main>

    <div id="modalPaymentStatus" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

            <button class="uk-modal-close-default" type="button" uk-close></button>
            <form action="{{ route('invoice.update') }}" method="post">
                @csrf
                @method('PATCH')
                <input type="hidden" name="id" value="{{ $pesanan->id }}">
                <select class="uk-select" name="status">
                    <option value="0">Belum Dibayar</option>
                    <option value="1">Sudah Dibayar</option>
                </select>
                <div class="uk-margin"><button type="submit"
                        class="uk-button uk-button-primary uk-border-rounded">Simpan</button></div>
            </form>

        </div>
    </div>


    <div id="modalPaymentDocument" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

            <button class="uk-modal-close-default" type="button" uk-close></button>

            <h5>Bukti Pembayaran</h5>
            <div class="uk-child-width-1-2" uk-grid>
                <div><img src="{{ $pesanan->bukti_transfer }}"alt="bukti dp"></div>
                <div><img src="{{ $pesanan->bukti_pelunasan }}"alt="bukti pelunasan"></div>
            </div>


        </div>
    </div>
    @push('script')
        <script>
            function openModalStatusPayment(ele) {
                UIkit.modal('#modalPaymentStatus').show();
            }
        </script>
    @endpush
</x-app-layout>
