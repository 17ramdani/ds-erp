<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Purchasing</h3>
                </div>

                <div class="uk-grid-medium" uk-grid>
                    <div class="uk-width-3-4@s">
                        <x-alert />
                        <div class="rz-panel">
                            <h5>Tambah Tipe Kain</h5>
                            <form class="uk-form-stacked" method="POST" action="{{ route('tipe.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="uk-margin">
                                    <label class="uk-form-label">Jenis Kain</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select" name="jenis_kain_id" required>
                                            <option value="">-- Pilih --</option>
                                            @foreach($jenis as $jk)
                                            <option value="{{ $jk->id }}">{{ $jk->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Tipe Kain</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="nama" required>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label">Gramasi</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select" name="barang_gramasi_id" required>
                                            <option>-- Pilih --</option>
                                            @foreach($gramasi as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label">Lebar Ukuran</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select" name="barang_lebar_id" required>
                                            <option>-- Pilih --</option>
                                            @foreach($lebar as $data)
                                            <option value="{{ $data->id }}">{{ $data->keterangan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label">Bagian</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="bagian" required>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label">Kategori Warna</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select" name="kategori_warna_id" required>
                                            <option>-- Pilih --</option>
                                            @foreach($warna->where('parent_id', 0) as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label"> Warna</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select" name="warna_id" required>
                                            <option>-- Pilih --</option>
                                            @foreach($warna as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Satuan</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select" name="barang_satuan_id" required>
                                            <option>-- Pilih --</option>
                                            @foreach($satuan as $item)
                                            <option value="{{ $item->id }}">{{ $item->keterangan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label"> Accesories Basic</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select" name="basic_id">
                                            <option>-- Pilih --</option>
                                            @foreach($basic->where('bagian', 'accessories') as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama}} -- Rp. {{ $item->harga_roll}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label"> Accesories Spandex</label>
                                    <div class="uk-form-controls">
                                        <select class="uk-select" name="spandex_id">
                                            <option>-- Pilih --</option>
                                            @foreach($basic->where('bagian', 'accessories') as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama}} -- Rp. {{ $item->harga_roll}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Harga Jual Roll</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="number" name="harga_roll" required>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Harga Jual Ecer</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="number" name="harga_ecer" required>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">QTY Aktual </label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="number" name="qty_roll" required>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Deskripsi</label>
                                    <div class="uk-form-controls">
                                        <textarea class="uk-textarea" name="deskripsi"></textarea>
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <label class="uk-form-label">Karakteristik</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="karakteristik" required>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <label class="uk-form-label">Panjang</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input" type="text" name="panjang" required>
                                    </div>
                                </div>

                                <div class="uk-grid-small uk-child-width-1-3@m" uk-grid>
                                    <div>
                                        <div class="uk-margin">
                                            <label class="uk-form-label">Gambar 1</label>
                                            <div class="uk-form-controls">
                                                <div class="js-upload" uk-form-custom>
                                                    <input id="gambar-upload" type="file" name="gambar" multiple onchange="previewImage(event, 'gambar-preview')">
                                                    <button class="uk-button uk-button-default" type="button" tabindex="-1">Upload</button>
                                                </div>
                                                <div class="uk-margin">
                                                    <img id="gambar-preview" src="#" alt="Gambar Preview" width="200" height="200">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-margin">
                                            <label class="uk-form-label">Gambar 2</label>
                                            <div class="uk-form-controls">
                                                <div class="js-upload" uk-form-custom>
                                                    <input id="gambar2-upload" type="file" name="gambar_2" multiple onchange="previewImage(event, 'gambar2-preview')">
                                                    <button class="uk-button uk-button-default" type="button" tabindex="-1">Upload</button>
                                                </div>
                                                <div class="uk-margin">
                                                    <img id="gambar2-preview" src="#" alt="Gambar 2 Preview" width="200" height="200">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="uk-margin">
                                            <label class="uk-form-label">Gambar 3</label>
                                            <div class="uk-form-controls">
                                                <div class="js-upload" uk-form-custom>
                                                    <input id="gambar3-upload" type="file" name="gambar_3" multiple onchange="previewImage(event, 'gambar3-preview')">
                                                    <button class="uk-button uk-button-default" type="button" tabindex="-1">Upload</button>
                                                </div>
                                                <div class="uk-margin">
                                                    <img id="gambar3-preview" src="#" alt="Gambar 3 Preview" width="200" height="200">
                                                </div>
                                            </div>
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
