<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Customer Experience</h3>
                </div>

                <div class="">

                    <div class="rz-panel">
                        @if (session()->has('success'))
                            <div class="uk-alert-success" uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                <p>{{ session('success') }}</p>
                            </div>
                        @endif
                        <h4>Follow Up History</h4>
                        <div class="uk-margin-large" uk-grid>
                            <div class="uk-width-1-3@s uk-flex-last@s">
                                <table class="rz-table-vertical">
                                    <tr>
                                        <th>Status</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td><span class="uk-label uk-label-blue">
                                                @if ($dtict->status == '1')
                                                    {{ 'Open' }}
                                                @elseif($dtict->status == '2')
                                                    {{ 'On Proses' }}
                                                @elseif($dtict->status == '3')
                                                    {{ 'Done' }}
                                                @elseif($dtict->status == '4')
                                                    {{ 'Closed' }}
                                                @else
                                                    {{ 'N/A' }}
                                                @endif
                                            </span></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="uk-width-2-3@s">
                                <table class="rz-table-vertical">
                                    <tr>
                                        <th>Customer</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ $dtict->nama_customer->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Customer</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ $dtict->category->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Keluhan</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ date('d-F-Y', strtotime($dtict->tanggal)) }}</td>
                                    </tr>
                                    <tr>
                                        <th>No. Pesanan</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ $dtict->no_pesanan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Keluhan</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>
                                            @if ($dtict->jenis_keluhan == '1')
                                                {{ 'Kualitas Pesanan' }}
                                            @elseif($dtict->jenis_keluhan == '2')
                                                {{ 'Kuantitas Pesanan' }}
                                            @elseif($dtict->jenis_keluhan == '3')
                                                {{ 'Lainnya' }}
                                            @else
                                                {{ 'N/A' }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi Keluhan</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ $dtict->desc_keluhan }}</td>
                                    </tr>
                                </table>
                            </div>



                        </div>
                        <div class="uk-margin uk-overflow-auto">
                            <table class="uk-table uk-table-small uk-table-divider uk-text-small">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>CS Pesanan</th>
                                        <th>Tgl. Tindak Lanjut</th>
                                        <th>Tindak Lanjut</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tdnkl as $ht)
                                        <tr>
                                            <td> {{ date('d-F-Y', strtotime($dtict->tanggal)) }}</td>
                                            <td>
                                                @if ($dtict->customer_service_id == 1)
                                                    {{ 'CS01' }}
                                                @else
                                                    {{ 'N/A' }}
                                                @endif
                                            </td>
                                            <td>{{ date('d-F-Y', strtotime($ht->tanggal_tindak_lanjut)) }}</td>
                                            <td>{{ $ht->tindak_lanjut }}</td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="uk-margin-top uk-text-right"><a href="/ticketing-add/{{ $dtict->id }}"
                                class="uk-button uk-button-primary uk-border-rounded">Tambah Follow Up</a></div>
                    </div>
                </div>

            </div>




        </div>
    </main>
</x-app-layout>
