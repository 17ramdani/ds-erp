<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Customer Experience</h3>
                </div>

                <div class="">

                    <div class="rz-panel uk-margin">
                        <h4>Manajemen Keluhan Konsumen</h4>
                        <div uk-grid>
                            <div class="uk-width-expand">
                                <div uk-grid>
                                    <div>Periode: <input class="uk-input uk-form-width-medium" type="date"
                                            placeholder="Some text..."></div>
                                    <div>s/d: <input class="uk-input uk-form-width-medium" type="date"
                                            placeholder="Some text..."></div>
                                </div>
                            </div>
                            <div>
                                <a href="" class="uk-button uk-button-default uk-border-rounded">Tampilkan</a>
                                <a href="" class="uk-button uk-button-default uk-border-rounded">Cetak
                                    Laporan</a>
                            </div>
                        </div>


                    </div>
                    <div class="rz-panel-buttonset uk-flex uk-flex-between uk-margin-small">
                        <dl class="uk-margin-top">
                            <dt>Jumlah Keluhan</dt>
                            <dd>{{ $jumlah_keluhan }}</dd>
                        </dl>
                        <dl>
                            <dt>Open</dt>
                            <dd>{{ $jumlah_open }}</dd>
                        </dl>
                        <dl>
                            <dt>On process</dt>
                            <dd>{{ $jumlah_prosess }}</dd>
                        </dl>
                        <dl>
                            <dt>Done</dt>
                            <dd>{{ $jumlah_done }}</dd>
                        </dl>

                    </div>
                    <div class="rz-panel">
                        <h4>History</h4>
                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider uk-text-small">
                                <thead>
                                    <tr>
                                        <th>Customer</th>
                                        <th>Jenis Kons.</th>
                                        <th>Tanggal</th>
                                        <th>No. Pesanan</th>
                                        <th>Jenis Keluhan</th>
                                        <th>Deskripsi Keluhan</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($ticketing->count() > 0)
                                        @foreach ($ticketing as $t)
                                            <tr>
                                                <td>{{ $t->nama_customer->nama }}</td>
                                                <td>{{ $t->category->nama }}</td>
                                                <td>{{ date('d-F-Y', strtotime($t->tanggal)) }}</td>
                                                <td>{{ $t->no_pesanan }}</td>
                                                <td>
                                                    @if ($t->jenis_keluhan == '1')
                                                        {{ 'Kualitas Pesanan' }}
                                                    @elseif($t->jenis_keluhan == '2')
                                                        {{ 'Kuantitas Pesanan' }}
                                                    @elseif($t->jenis_keluhan == '3')
                                                        {{ 'Lainnya' }}
                                                    @else
                                                        {{ 'N/A' }}
                                                    @endif
                                                </td>
                                                <td>{{ $t->desc_keluhan }}</td>
                                                <td>
                                                    @if ($t->status == '1')
                                                        {{ 'Open' }}
                                                    @elseif($t->status == '2')
                                                        {{ 'On Proses' }}
                                                    @elseif($t->status == '3')
                                                        {{ 'Done' }}
                                                    @elseif($t->status == '4')
                                                        {{ 'Closed' }}
                                                    @else
                                                        {{ 'N/A' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="/detail-ticketing/{{ $t->id }}">Detail</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        Data not found.
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </main>

</x-app-layout>
