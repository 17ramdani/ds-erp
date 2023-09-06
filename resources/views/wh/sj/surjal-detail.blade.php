<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Ekspedisi</h3>
                </div>

                <div class="">

                    <div class="rz-panel">
                        <h4>Surat Jalan</h4>
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
                        <div class="uk-margin-medium uk-child-width-1-5@m uk-child-width-1-2" uk-grid>
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
                        <div class="uk-margin-large-top uk-flex uk-flex-between">
                            <div>
                                <a href="{{ route('surjal') }}"
                                    class="uk-button uk-button-default uk-border-rounded">Back</a>

                            </div>
                            <div>
                                <a target="_blank" href="{{ route('surjal.cetak', ['id' => $data->id]) }}"
                                    class="uk-button uk-button-primary uk-border-rounded"><span
                                        class="uk-margin-small-right" uk-icon="print"></span>Print</a>

                            </div>


                        </div>
                    </div>
                </div>

            </div>




        </div>
    </main>
</x-app-layout>
