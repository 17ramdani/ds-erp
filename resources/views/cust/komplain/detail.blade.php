<x-app-layout>

    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Customer Experience</h3>
                </div>

                <div class="">
                    <x-alert />
                    <div class="rz-panel">
                        <h4>Customer Complaint <span uk-icon="chevron-right"></span> <span class="uk-text-light">Detail
                            </span></h4>
                        <form action="{{ route('komplain.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="kid" value="{{ $komplain->id }}" required>

                            <div class="uk-child-width-1-2@s uk-grid-medium" uk-grid>
                                <div>
                                    <table class="rz-table-vertical">
                                        <tr>
                                            <th>No. Pesanan</th>
                                            <td class="uk-table-shrink">:</td>
                                            <td>{{ $pesanan['nomor'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Customer</th>
                                            <td class="uk-table-shrink">:</td>
                                            <td>{{ $pesanan['customer']['nama'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Sales</th>
                                            <td class="uk-table-shrink">:</td>
                                            <td>{{ $pesanan['salesman']['nama'] ?? '-' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Catatan Pembayaran</th>
                                            <td>:</td>
                                            <td>{{ $pesanan['catatan'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Bukti Transfer</th>
                                            <td>:</td>
                                            <td><a href="#modalBuktiTransfer" uk-toggle>View</a></td>
                                        </tr>

                                    </table>
                                </div>
                                <div>
                                    <table class="rz-table-vertical">

                                        <tr>
                                            <th>Tanggal Pesanan</th>
                                            <td class="uk-table-shrink">:</td>
                                            <td>{{ date_format(date_create($pesanan['tanggal_pesanan']), 'd-M-y') }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td class="uk-table-shrink">:</td>
                                            <td>{{ $pesanan['status_kode'] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tipe Pesanan</th>
                                            <td class="uk-table-shrink">:</td>
                                            <td>{{ $pesanan['tipe_pesanan'] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Pesanan</th>
                                            <td class="uk-table-shrink">:</td>
                                            <td>{{ $pesanan['jenis_pesanan'] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Kategori Pesanan</th>
                                            <td class="uk-table-shrink">:</td>
                                            <td>{{ $pesanan['kategori_pesanan'] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Status Keluhan</th>
                                            <td class="uk-table-shrink">:</td>
                                            <td>
                                                <select class="uk-select uk-form-small" name="komplain_status">
                                                    <option @selected($komplain->status == 'Diproses')>Diproses</option>
                                                    <option @selected($komplain->status == 'Selesai')>Selesai</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </div>


                            </div>
                            <div class="uk-overflow-auto uk-margin-large">
                                <h4>Detail Barang</h4>
                                <table class="uk-table uk-table-small uk-table-striped">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>Nama Barang</th>
                                            <th>LOT</th>
                                            <th>GRM</th>
                                            <th>LBR</th>
                                            <th>Warna</th>
                                            <th>Kat. Warna</th>
                                            <th>Qty Act</th>
                                            <th>Harga</th>
                                            <th>Disc</th>
                                            <th>Grand Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pesanan['details'] as $detail)
                                            @php
                                                $subtotal = $detail['qty_act'] * $detail['harga'];
                                                $total_disc = $detail['total_disc'];
                                                if ($total_disc != 0 || $total_disc != '') {
                                                    if ($detail['jenis_disc'] == 'Persen') {
                                                        $total_disc = ($subtotal * $total_disc) / 100;
                                                        $subtotal = $subtotal - $total_disc;
                                                    } else {
                                                        $subtotal = $subtotal - $total_disc;
                                                    }
                                                }
                                                // dd($dpids->toArray());
                                                $checked = '';
                                                if (in_array($detail['id'], $dpids->toArray())) {
                                                    $checked = 'checked';
                                                }
                                            @endphp
                                            @if ($detail['bagian'] == 'body')
                                                <tr>
                                                    <td><input type="checkbox" class="uk-checkbox" name="dp_id[]"
                                                            value="{{ $detail['id'] }}" {{ $checked }}></td>
                                                    <td>{{ $detail['tipe_kain']['nama'] }}</td>
                                                    <td>{{ $detail['barang_lot_id'] }}</td>
                                                    <td>{{ $detail['tipe_kain']['gramasi']['nama'] }}</td>
                                                    <td>{{ $detail['tipe_kain']['lebar']['keterangan'] }}</td>
                                                    <td>{{ $detail['tipe_kain']['warna']['nama'] }}</td>
                                                    <td>{{ $detail['tipe_kain']['kategori_warna']['nama'] }}</td>
                                                    <td>{{ $detail['qty_act'] }}</td>
                                                    <td>{{ number_format($detail['harga']) }}</td>
                                                    <td>{{ number_format($total_disc) }}</td>
                                                    <td>{{ number_format($subtotal) }}</td>
                                                </tr>
                                            @else
                                                <tr>
                                                    <td><input type="checkbox" class="uk-checkbox" name="dp_id[]"
                                                            value="{{ $detail['id'] }}" {{ $checked }}></td>
                                                    <td>{{ $detail['tipe_kain_accessories']['accessories']['name'] }}
                                                    </td>
                                                    <td>{{ $detail['barang_lot_id'] }}</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>{{ $detail['warna_pesanan']['nama'] }}</td>
                                                    <td>-</td>
                                                    <td>{{ $detail['qty_act'] }}</td>
                                                    <td>{{ number_format($detail['harga']) }}</td>
                                                    <td>{{ number_format($total_disc) }}</td>
                                                    <td>{{ number_format($subtotal) }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="uk-child-width-1-2@s" uk-grid>
                                <div>
                                    <label class="uk-form-label">Keluhan Pelanggan</label>
                                    <div class="uk-form-controls">
                                        <textarea rows="3" class="uk-textarea" placeholder="Barang diterima dalam keadaan rusak" disabled>{{ $komplain->keterangan }}</textarea>
                                    </div>
                                    <label class="uk-form-label">Gambar</label>
                                    <div class="uk-form-controls">
                                        <img src="{{ $komplain->photos }}" alt="photo">
                                    </div>

                                </div>
                                <div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">Analisa Penyebab Masalah</label>
                                        <div class="uk-form-controls">
                                            <textarea rows="3" class="uk-textarea" name="analisa_input">{{ $komplain->analisa ?? old('analisa') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label">Tindakan Perbaikan</label>
                                        <div class="uk-form-controls">
                                            <textarea rows="3" class="uk-textarea" name="tindakan_input">{{ $komplain->tindakan ?? old('tindakan') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="uk-margin-medium-top uk-flex uk-flex-between">
                                <div>
                                    <button type="submit" name="but_save" value="save"
                                        class="uk-button uk-border-rounded uk-margin-small-right uk-button-default">Simpan</button>
                                    <button type="submit" name="but_submit" value="submit"
                                        class="uk-button uk-border-rounded uk-button-primary">Submit</button>
                                </div>
                                <div>
                                    <a href="{{ route('komplain.show', $komplain->id) }}" target="_blank"
                                        class="uk-button uk-border-rounded uk-margin-small-right uk-button-default">Cetak</a>
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
                    <img src="{{ $pesanan['bukti_transfer'] }}" alt="bukti DP">
                </div>
                <div>
                    <h5>Pelunasan</h5>
                    <img src="{{ $pesanan['bukti_pelunasan'] }}" alt="bukti pelunasan">
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
