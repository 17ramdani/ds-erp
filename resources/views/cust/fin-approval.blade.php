<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Customer Experience</h3>
                </div>

                <div class="">

                    <div class="rz-panel">
                        <h4>New Buyer Financing</h4>

                        @if (session()->has('success'))
                            <div class="uk-alert-success" uk-alert>
                                <a class="uk-alert-close" uk-close></a>
                                <p>{{ session('success') }}</p>
                            </div>
                        @endif

                        <div class="uk-child-width-1-2@s" uk-grid>
                            <div>
                                <table class="rz-table-vertical uk-margin-large">
                                    <caption class="uk-text-left">
                                        <h5>Data Pribadi</h5>
                                    </caption>
                                    <tbody>
                                        <tr>
                                            <th>Nama Lengkap</th>
                                            <td>{{ $buyer_financing->customer->nama }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tempat / Tanggal Lahir</th>
                                            <td>{{ ucwords($buyer_financing->customer->pob) }},
                                                {{ date('d, F Y', strtotime($buyer_financing->customer->dob)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Alamat Rumah</th>
                                            <td>{{ ucwords($buyer_financing->customer->alamat) }}</td>
                                        </tr>
                                        <tr>
                                            <th>No Telp / HP</th>
                                            <td>{{ $buyer_financing->customer->nohp }} / {{ $buyer_financing->customer->nohp }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $buyer_financing->customer->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>No. KTP</th>
                                            <td>{{ $buyer_financing->customer->no_ktp }}</td>
                                        </tr>
                                        <tr>
                                            <th>Pekerjaan</th>
                                            <td>{{ ucwords($buyer_financing->customer->pekerjaan) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Lama Berusaha</th>
                                            <td>{{ $buyer_financing->customer->lama_berusaha }}</td>
                                        </tr>
                                        <tr>
                                            <th>Omset per Tahun</th>
                                            <td>Rp. {{ number_format($buyer_financing->customer->omset) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <table class="rz-table-vertical uk-margin-large">
                                    <caption class="uk-text-left">
                                        <h5>Data Perusahaan</h5>
                                    </caption>
                                    <tbody>
                                        <tr>
                                            <th>Nama Perusahaan</th>
                                            <td>{{ $buyer_financing->customer->nama_perusahaan }}</td>
                                        </tr>
                                        <tr>
                                            <th>Alamat Perusahaan</th>
                                            <td>{{ $buyer_financing->customer->alamat_perusahaan }}</td>
                                        </tr>
                                        <tr>
                                            <th>No. Telp</th>
                                            <td>{{ $buyer_financing->customer->tlp_perusahaan }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $buyer_financing->customer->email_perusahaan }}</td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Usaha</th>
                                            <td>{{ $buyer_financing->customer->jenis_usaha }}</td>
                                        </tr>
                                        <tr>
                                            <th>Lama Berdiri Perusahaan</th>
                                            <td>{{ $buyer_financing->lama_berdiri_usaha }} tahun</td>
                                        </tr>
                                        <tr>
                                            <th>Omset per Tahun</th>
                                            <td>Rp. {{ number_format($buyer_financing->customer->omset_perusahaan) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Kebutuhan Nominal</th>
                                            <td>Rp. {{ number_format($buyer_financing->customer->kebutuhan_nominal) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Referensi dari</th>
                                            <td>{{ $buyer_financing->customer->referensi }}</td>
                                        </tr>
                                        <tr>
                                            <th>Kategori Member</th>
                                            <td>{{ strtoupper($buyer_financing->customer->category->nama) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>




                        <table class="uk-table uk-table-small uk-table-divider uk-table-middle uk-margin-large">
                            <caption class="uk-text-left">
                                <h5>Kebutuhan Bahan</h5>
                            </caption>
                            <thead>
                                <tr>
                                    <th rowspan="2">Nama / Jenis Bahan<br></th>
                                    <th colspan="3">Spesifikasi </th>
                                    <th rowspan="2">Qty</th>
                                    <th rowspan="2">Satuan</th>
                                </tr>
                                <tr>
                                    <th>Lebar</th>
                                    <th>Gramasi</th>
                                    <th>Warna</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kebutuhan_bahan as $keb)
                                <tr>
                                    <td>{{ $keb->tipe_kain->nama}}</td>
                                    <td>{{ $keb->tipe_kain->lebar->keterangan}}</td>
                                    <td>{{ $keb->tipe_kain->gramasi->nama}}</td>
                                    <td>{{ $keb->warna_pesanan->nama }}</td>
                                    <td>{{ $keb->qty_act }}</td>
                                    <td>{{ $keb->satuan }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="uk-margin-large">
                            <h5>Produk yang dihasilkan</h5>
                            <ol>
                                <li>Kaos Combed</li>
                                <li>Baby Terry</li>
                            </ol>
                        </div>




                        <div class="uk-margin-large-top">
                            @if($buyer_financing->status != 1)
                            <form action="/approved_financing" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $buyer_financing->id }}">
                                <input type="hidden" name="pesanan_id" value="{{ $buyer_financing->pesanan_id }}">
                                <button type="submit" class="uk-button uk-button-primary uk-border-rounded">Approve</button>
                            </form>
                            @else
                            <button type="button" disabled class="uk-button uk-button-primary uk-border-rounded">Approve</button>
                            @endif
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </main>
</x-app-layout>
