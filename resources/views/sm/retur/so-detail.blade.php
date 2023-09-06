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
                        <h4>Detail Retur</h4>
                        <div class="uk-child-width-1-2@s uk-grid-large" uk-grid>
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
                                        <th>Sales</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ $data->pesanan->salesman->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Catatan Pembayaran</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ $data->pesanan->catatan_cs }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tgl. SO</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ date_format(date_create($data->pesanan->tanggal_pesanan), 'd-F-Y') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kategori Retur</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ $data->jenis_retur }}</td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ $data->deskripsi }}</td>
                                    </tr>
                                    <tr>
                                        <th>Foto Produk Retur</th>
                                        <td>:</td>
                                        <td><a href="#modalReturDetail" uk-toggle>View</a></td>
                                    </tr>
                                </table>
                            </div>
                            <div>


                            </div>


                        </div>
                        <form action="{{ route('retur.detail.store', $data->id) }}" method="post">
                            <div class="uk-overflow-auto uk-margin-medium-top">
                                <h4>Detail Barang</h4>
                                @csrf
                                <table class="uk-table uk-table-small uk-table-striped rz-table-small-override">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>Kode Barang<br></th>
                                            <th>Lot</th>
                                            <th>Nama Barang<br></th>
                                            <th>Qty Retur<br></th>
                                            <th>Grand <br>Total<br></th>
                                            <th>Created by</th>
                                            <th>Created Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($data->pesanan->details as $detail)
                                            @php
                                                $subtotal = 0;
                                                $disc = 0;
                                                $subtotal = $detail->qty_act * $detail->harga;
                                                if ($detail->jenis_disc == 'Persen') {
                                                    $disc = ($subtotal * $detail->total_dic) / 100;
                                                }
                                                if ($detail->jenis_disc == 'Nominal') {
                                                    $disc = $subtotal - $detail->total_dic;
                                                }
                                                $subtotal = $subtotal - $disc;
                                                $rdetail = DB::table('retur_details')
                                                    ->where('detail_pesanan_id', $detail->id)
                                                    ->exists();
                                                $checked = '';
                                                if ($rdetail) {
                                                    $checked = 'checked';
                                                }
                                            @endphp
                                            <tr>
                                                <td>
                                                    <input class="uk-checkbox" type="checkbox" name="dp_id[]"
                                                        value="{{ $detail->id }}" {{ $checked }}>
                                                </td>
                                                <td>{{ $detail->tipe_kain->jenis->nama }}</td>
                                                <td>{{ $detail->barang_lot_id }}</td>
                                                <td>{{ $detail->tipe_kain->nama }}</td>
                                                <td>{{ $detail->qty_act }}</td>
                                                <td>
                                                    {{ number_format($subtotal) }}
                                                </td>
                                                <td>
                                                    @php
                                                        $updater = \App\Models\User::find($detail->updated_by)->name ?? '-';
                                                    @endphp
                                                    {{ $updater }}
                                                </td>
                                                <td>
                                                    {{ date_format(date_create($detail->updated_at), 'd/m/y') . '  ' . date_format(date_create($detail->updated_at), 'H:i') }}
                                                    <br>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <div class="uk-margin-medium-top uk-text-right">
                                <button type="submit" name="but_save" value="save"
                                    class="uk-button uk-button-default uk-margin-small-right">Save</button>
                                @if (count($retur_details) > 0)
                                    <a href="{{ route('retur.cetak', $data->id) }}" target="_blank"
                                        class="uk-button uk-button-default uk-margin-small-right">Print</a>
                                @else
                                    <a href="javascript:void(0)"
                                        class="uk-button uk-button-default uk-margin-small-right">Print</a>
                                @endif

                                <button type="submit" name="but_submit"
                                    class="uk-button uk-button-primary uk-margin-small-right"@disabled(true)>Submit</button>
                            </div>


                        </form>
                    </div>
                </div>

            </div>




        </div>
    </main>

    <div id="modalReturDetail" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

            <button class="uk-modal-close-default" type="button" uk-close></button>

            <div class="uk-child-width-1-2" uk-grid>
                <div>
                    <h5>Foto Produk Retur</h5>
                    @php
                        $photos = explode(',', $data->photos);
                    @endphp
                    @forelse ($photos as $item)
                        <img src="{{ $item }}" alt="photo">
                        <hr>
                    @empty
                        <span>Tidak ada foto</span>
                    @endforelse

                </div>

            </div>

        </div>
    </div>
</x-app-layout>
