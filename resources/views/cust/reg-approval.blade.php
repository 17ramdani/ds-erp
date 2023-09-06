<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Customer Experience</h3>
                </div>

                <div class="">

                    <div class="rz-panel">
                        <h4>New Registration</h4>
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
                                            <td>{{ $member->customer->nama }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tempat / Tanggal Lahir</th>
                                            <td>{{ ucwords($member->customer->pob) }},
                                                {{ date('d, F Y', strtotime($member->customer->dob)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Alamat Rumah</th>
                                            <td>{{ ucwords($member->customer->alamat) }}</td>
                                        </tr>
                                        <tr>
                                            <th>No Telp / HP</th>
                                            <td>{{ $member->customer->nohp }} / {{ $member->customer->nohp }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $member->customer->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>No. KTP</th>
                                            <td>{{ $member->customer->no_ktp }}</td>
                                        </tr>
                                        <tr>
                                            <th>Pekerjaan</th>
                                            <td>{{ ucwords($member->customer->pekerjaan) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Lama Berusaha</th>
                                            <td>{{ $member->customer->lama_berusaha }}</td>
                                        </tr>
                                        <tr>
                                            <th>Omset per Tahun</th>
                                            <td>Rp. {{ number_format($member->customer->omset) }}</td>
                                        </tr>
                                        {{-- <tr>
                                            <th>Status</th>
                                            <td>
                                                @if ($member->is_status == 0)
                                                    <span style="color:red">Menunggu Pembayaran</span>
                                                @else
                                                    <span style="color:green">Member</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Bergabung</th>
                                            <td>{{ date('d, F Y H:i:s', strtotime($member->join_at)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Berkahir</th>
                                            <td>
                                                @if ($member->expired_at != null)
                                                    {{ date('d, F Y H:i:s', strtotime($member->expired_at)) }}
                                                @else
                                                    <span style="color:red">Belum di Approve</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Bukti Pembayaran</th>
                                            <td><a href="">Lihat Bukti</a></td>
                                        </tr> --}}
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
                                            <td>{{ $member->customer->nama_perusahaan }}</td>
                                        </tr>
                                        <tr>
                                            <th>Alamat Perusahaan</th>
                                            <td>{{ $member->customer->alamat_perusahaan }}</td>
                                        </tr>
                                        <tr>
                                            <th>No. Telp</th>
                                            <td>{{ $member->customer->tlp_perusahaan }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ $member->customer->email_perusahaan }}</td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Usaha</th>
                                            <td>{{ $member->customer->jenis_usaha }}</td>
                                        </tr>
                                        <tr>
                                            <th>Lama Berdiri Perusahaan</th>
                                            <td>{{ $member->lama_berdiri_usaha }} Tahun</td>
                                        </tr>
                                        <tr>
                                            <th>Omset per Tahun</th>
                                            <td>Rp. {{ number_format($member->customer->omset_perusahaan) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Kebutuhan Nominal</th>
                                            <td>Rp. {{ number_format($member->customer->kebutuhan_nominal) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Referensi dari</th>
                                            <td>{{ $member->customer->referensi }}</td>
                                        </tr>
                                        <tr>
                                            <th>Kategori Member</th>
                                            <td>{{ strtoupper($member->category->nama) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>




                        <table class="uk-table uk-table-small uk-table-middle uk-margin-large">
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
                                <tr>
                                    <td>SK.CARDED 24'S</td>
                                    <td>42</td>
                                    <td>170 - 180</td>
                                    <td>PUTIH</td>
                                    <td>1</td>
                                    <td>Roll</td>
                                </tr>
                                <tr>
                                    <td>SK.CARDED 24'S</td>
                                    <td>42</td>
                                    <td>170 - 180</td>
                                    <td>PUTIH</td>
                                    <td>1</td>
                                    <td>Roll</td>
                                </tr>
                                <tr>
                                    <td>SK.CARDED 24'S</td>
                                    <td>42</td>
                                    <td>170 - 180</td>
                                    <td>PUTIH</td>
                                    <td>1</td>
                                    <td>Roll</td>
                                </tr>
                                <tr>
                                    <td>SK.CARDED 24'S</td>
                                    <td>42</td>
                                    <td>170 - 180</td>
                                    <td>PUTIH</td>
                                    <td>1</td>
                                    <td>Roll</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="uk-margin-large">
                            <h5>Produk yang dihasilkan</h5>
                            <ol>
                                <li>Kaos Combed</li>
                                <li>Baby Terry</li>
                            </ol>
                        </div>

                        <div class="uk-margin-large">
                            <h5>Status Pembayaran</h5>
                            <form action="/approved_bayar" method="POST">
                                @csrf
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-expand">
                                        <input type="hidden" name="id" value="{{ $member->id }}">
                                        <select name="status_bayar" class="uk-select">
                                            <option value="0"
                                                {{ $member->status_bayar == '0' ? 'selected' : '' }}>Belum Bayar
                                            </option>
                                            <option value="1"
                                                {{ $member->status_bayar == '1' ? 'selected' : '' }}>Sudah bayar
                                            </option>
                                        </select>
                                    </div>
                                    <div class="uk-width-auto">
                                        <button type="submit" class="uk-button uk-button-default">Save</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="uk-margin-large-top">
                            <form action="/approved_member" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $member->id }}">
                                <input type="hidden" name="joinat" value="{{ $member->join_at }}">
                                <button type="submit" class="uk-button uk-button-primary uk-border-rounded"
                                    uk-toggle>Approve</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </main>
</x-app-layout>
