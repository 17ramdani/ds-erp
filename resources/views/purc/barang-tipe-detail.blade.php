<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Purchasing</h3>
                </div>

                <div class="uk-grid-collapse uk-grid-medium" uk-grid>
                    <div class="uk-width-3-4@s">
                        <div class="rz-panel">
                            <x-alert />

                            <div class="uk-margin-medium">
                                <table class="rz-table-vertical">
                                    <caption class="uk-text-left">
                                        <h4>Detail Tipe Kain</h4>
                                    </caption>
                                    <!-- Detail Tipe Kain -->
                                    <tr>
                                        <th>Jenis Kain</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ $tipe->jenis->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tipe Kain</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ $tipe->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Gramasi</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ $tipe->gramasi->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Lebar Ukuran </th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ $tipe->lebar->keterangan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Bagian</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ $tipe->bagian }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kategori Warna</th>
                                        <td class="uk-table-shrink">:

                                        </td>
                                        <td>{{ $tipe->kategori_warna->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Warna</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ $tipe->warna->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Satuan</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ $tipe->satuan->keterangan }}</td>
                                    </tr>
                                    {{-- @if ($tipe->accesories !== 0)
                                        <tr>
                                            <th>Accesories_Basic</th>
                                            <td class="uk-table-shrink">:</td>
                                            @if ($tipe->basic)
                                                <td>{{ $tipe->basic->nama }}</td>
                                            @else
                                                <td>Belum ditentukan</td>
                                            @endif
                                        </tr>
                                    @endif

                                    @if ($tipe->accesories_spandex !== 0)
                                        <tr>
                                            <th>Accesories_Spandex</th>
                                            <td class="uk-table-shrink">:</td>
                                            @if ($tipe->spandex)
                                                <td>{{ $tipe->spandex->nama }}</td>
                                            @else
                                                <td>Belum ditentukan</td>
                                            @endif
                                        </tr>
                                    @endif
                                    <tr>
                                        <th>Harga Roll</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>Rp. {{ number_format($tipe->harga_roll, 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Harga Jual Ecer</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>Rp. {{ number_format($tipe->harga_ecer, 0, ',', '.') }}</td>
                                    </tr> --}}
                                    <tr>
                                        <th>QTY Aktual</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ $tipe->qty_roll }}</td>
                                    </tr>
                                    <tr>
                                        <th>Deskripsi</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ $tipe->deskripsi }}</td>
                                    </tr>
                                    <tr>
                                        <th>Karakteristik</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ $tipe->karakteristik }}</td>
                                    </tr>
                                    <tr>
                                        <th>Panjang</th>
                                        <td class="uk-table-shrink">:</td>
                                        <td>{{ $tipe->panjang }}</td>
                                    </tr>
                                </table>
                                <br>
                                <div class="uk-grid-small uk-child-width-1-3@m" uk-grid>
                                    <div>
                                        <div class="uk-margin">
                                            <label class="uk-table-shrink">Gambar 1</label>
                                            <div class="uk-form-controls">
                                                <div class="uk-margin">
                                                    <img id="gambar-preview" src="{{ $tipe->gambar }}" alt="{{ $tipe->nama }}"  width="200" height="200">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-margin">
                                            <label class="uk-table-shrink">Gambar 2</label>
                                            <div class="uk-form-controls">
                                                <div class="uk-margin">
                                                    <img id="gambar2-preview" src="{{ $tipe->gambar_2 }}" alt="{{ $tipe->nama }}" width="200" height="200">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-margin">
                                            <label class="uk-table-shrink">Gambar 3</label>
                                            <div class="uk-form-controls">
                                                <div class="uk-margin">
                                                    <img id="gambar3-preview" src="{{ $tipe->gambar_3 }}" alt="{{ $tipe->nama }}" width="200" height="200">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <br>
                                <br>
                                <div class="uk-text-right">
                                    <a href="{{route('tipe.index')}}" class="uk-button uk-button-default uk-border-rounded">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
