<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Purchasing</h3>
                </div>

                <div class="uk-grid-medium" uk-grid>
                    <div class="uk-width-2-3@s">
                        <div class="rz-panel">
                            <x-alert />
                            <h5>Update Tipe Kain</h5>
                            <form class="uk-form-stacked" method="POST" action="{{ route('tipe.update', ['id' => $tipe->id]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="uk-margin">
                                    <label class="uk-form-label">Jenis Kain</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select" name="jenis_kain_id">
                                            @foreach ($jenis as $jk)
                                            <option value="{{ $jk->id }}" @if ($tipe->jenis_kain_id == $jk->id) selected @endif>
                                                {{ $jk->nama }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Tipe Kain</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="nama" value="{{ $tipe->nama }}">
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label">Gramasi</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select" name="barang_gramasi_id">
                                            @foreach ($gramasi as $data)
                                            <option value="{{ $data->id }}" @if ($data->id == $tipe->barang_gramasi_id) selected @endif>
                                                {{ $data->nama }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label">Lebar Ukuran</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select" name="barang_lebar_id">
                                            @foreach ($lebar as $data)
                                            <option value="{{ $data->id }}" {{ $data->id == $tipe->barang_lebar_id ? 'selected' : '' }}>
                                                {{ $data->keterangan }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label">Bagian</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="bagian" value="{{ $tipe->bagian }}">
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label">Kategori Warna</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select" name="kategori_warna_id">
                                            <option value="">-- Pilih --</option>
                                            @foreach ($kategori_warna->where('parent_id', 0) as $item)
                                            <option value="{{ $item->id }}" {{ $item->id == $tipe->kategori_warna_id ? 'selected' : '' }}>
                                                {{ $item->nama }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label"> Warna</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select" name="warna_id">
                                            @foreach ($warna as $item)
                                            <option value="{{ $item->id }}" {{ $item->id == $tipe->warna_id ? 'selected' : '' }}>
                                                {{ $item->keterangan }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Satuan</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select" name="barang_satuan_id">
                                            @foreach ($satuan as $item)
                                            <option value="{{ $item->id }}" {{ $item->id == $tipe->barang_satuan_id ? 'selected' : '' }}>
                                                {{ $item->keterangan }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Accesories Basic</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select" name="basic_id">
                                            <option>-- Pilih --</option>
                                            @foreach ($basic->where('bagian', 'accessories') as $item)
                                                <option value="{{ $item->id }}" {{ $item->id == $tipe->basic_id ? 'selected' : '' }}>
                                                    {{ $item->nama }} -- Rp. {{ $item->harga_roll }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label">Accesories Spandex</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select" name="spandex_id">
                                            <option>-- Pilih --</option>
                                            @foreach ($spandex->where('bagian', 'accessories') as $item)
                                                <option value="{{ $item->id }}" {{ $item->id == $tipe->spandex_id ? 'selected' : '' }}>
                                                    {{ $item->nama }} -- Rp. {{ $item->harga_roll }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label">Harga Jual Roll</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="number" name="harga_roll" value="{{ $tipe->harga_roll }}">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Harga Jual Ecer</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="number" name="harga_ecer" value="{{ $tipe->harga_ecer }}">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">QTY Aktual</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="number" name="qty_roll" value="{{ $tipe->qty_roll }}">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Deskripsi</label>
                                    <div class="uk-form-controls">
                                        <textarea class="uk-textarea" name="deskripsi">{{ $tipe->deskripsi }}</textarea>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label">Karakteristik</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="karakteristik" value="{{ $tipe->karakteristik }}">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Panjang</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="panjang" value="{{ $tipe->panjang }}">
                                    </div>
                                </div>


                                <div class="uk-margin">
                                    <label class="uk-form-label">Gambar 1</label>
                                    <div class="uk-form-controls">
                                        @if ($tipe->gambar)
                                        <img src="{{ $tipe->gambar }}" alt="{{ $tipe->nama }}" style="width: 200px; height: 200px;">
                                        @else
                                        <p>Tidak ada gambar</p>
                                        @endif
                                        <div class="js-upload" uk-form-custom>
                                            <input id="gambar-upload" type="file" name="gambar" multiple onchange="previewImage(event, 'gambar-preview')">
                                            <button class="uk-button uk-button-default" type="button" tabindex="-1">Upload</button>
                                        </div>
                                        <div class="uk-margin">
                                            <img id="gambar-preview" src="#" alt="Gambar Preview" width="200" height="200">
                                        </div>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label">Gambar 2</label>
                                    <div class="uk-form-controls">
                                        @if ($tipe->gambar)
                                        <img src="{{ $tipe->gambar_2 }}" alt="{{ $tipe->nama }}" style="width: 200px; height: 200px;">
                                        @else
                                        <p>Tidak ada gambar</p>
                                        @endif
                                        <div class="js-upload" uk-form-custom>
                                            <input id="gambar-upload" type="file" name="gambar_2" multiple onchange="previewImage(event, 'gambar-preview_2')">
                                            <button class="uk-button uk-button-default" type="button" tabindex="-1">Upload</button>
                                        </div>
                                        <div class="uk-margin">
                                            <img id="gambar-preview_2" src="#" alt="Gambar Preview" width="200" height="200">
                                        </div>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label">Gambar 3</label>
                                    <div class="uk-form-controls">
                                        @if ($tipe->gambar)
                                        <img src="{{ $tipe->gambar_3 }}" alt="{{ $tipe->nama }}" style="width: 200px; height: 200px;">
                                        @else
                                        <p>Tidak ada gambar</p>
                                        @endif
                                        <div class="js-upload" uk-form-custom>
                                            <input id="gambar-upload" type="file" name="gambar_3" multiple onchange="previewImage(event, 'gambar-preview_3')">
                                            <button class="uk-button uk-button-default" type="button" tabindex="-1">Upload</button>
                                        </div>
                                        <div class="uk-margin">
                                            <img id="gambar-preview_3" src="#" alt="Gambar Preview" width="200" height="200">
                                        </div>
                                    </div>
                                </div>

                                <div class="uk-margin-large-top uk-text-right">
                                    <a href="" class="uk-button uk-button-default uk-border-rounded uk-margin-small-right">Batal</a>
                                    <button type="submit" class="uk-button uk-button-primary uk-border-rounded">Simpan</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <script>
        function previewImage(event, previewId) {
            var reader = new FileReader();
            reader.onload = function() {
                var preview = document.getElementById(previewId);
                preview.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</x-app-layout>
