<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Customer Experience</h3>
                </div>

                <div class="">

                    <div class="rz-panel">
                        <h4>Customer <span uk-icon="chevron-right"></span> <span class="uk-text-light">Detail </span>
                        </h4>
                        <x-alert/>

                        <form class="uk-form-stacked" method="POST" action="{{ route('customer.edit', ['id' => $customer->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="uk-margin-large-top" uk-grid>
                                <div class="uk-width-2-3@s">
                                    <div uk-grid>
                                        <div class="uk-width-1-3@s">
                                            <h5>Data Pribadi</h5>
                                        </div>
                                        <div class="uk-width-2-3@s">
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Nama
                                                        Lengkap</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" name="nama" value="{{ $customer->nama }}">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">KTP</label>
                                                    <div class="uk-form-controls">
                                                        <input type="number" class="uk-input" name="no_ktp" value="{{ $customer->no_ktp }}">
                                                    </div>
                                                </div>
                                                <div class="uk-child-width-1-2" uk-grid>
                                                    <div>
                                                        <label class="uk-form-label"
                                                            for="form-stacked-select">Tempat</label>
                                                        <div class="uk-form-controls">
                                                            <input type="text" class="uk-input" name="pob" value="{{ $customer->pob }}">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label class="uk-form-label" for="form-stacked-select">Tanggal
                                                            Lahir</label>
                                                        <div class="uk-form-controls">
                                                            <input type="date" class="uk-input" name="dob" value="{{ $customer->dob }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Alamat Sesuai
                                                        KTP</label>
                                                    <div class="uk-form-controls">
                                                        <textarea rows="5" class="uk-textarea" name="alamat" >{{ $customer->alamat }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Kelurahan Sesuai
                                                        KTP</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Kecamatan Sesuai
                                                        KTP</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Kota/Kabupaten
                                                        Sesuai KTP</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Provinsi Sesuai
                                                        KTP</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder="">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                    <div uk-grid>
                                        <div class="uk-width-1-3@s">
                                            <h5>Data Domisili</h5>
                                        </div>
                                        <div class="uk-width-2-3@s">
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Alamat
                                                        Domisili</label>
                                                    <div class="uk-form-controls">
                                                        <textarea rows="3" class="uk-textarea" name="alamat_domisili"></textarea>
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Kelurahan
                                                        Domisili</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Kecamatan
                                                        Domisili</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Kota/Kabupaten
                                                        Domisili</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Provinsi
                                                        Domisili</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder="">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                    <div uk-grid>
                                        <div class="uk-width-1-3@s">
                                            <h5>Data Kontak</h5>
                                        </div>
                                        <div class="uk-width-2-3@s">
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">No HP</label>
                                                    <div class="uk-form-controls">
                                                        <input type="tel" class="uk-input" placeholder="" name="nohp" value=" {{ $customer->nohp }}">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">No HP
                                                        Darurat</label>
                                                    <div class="uk-form-controls">
                                                        <input type="tel" class="uk-input" placeholder="" name="notlp" value=" {{ $customer->notlp }}">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Hubungan dengan
                                                        Pemilik Kontak Darurat</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Email</label>
                                                    <div class="uk-form-controls">
                                                        <input type="email" class="uk-input" placeholder="" name="email" value=" {{ $customer->email }}">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                    <div uk-grid>
                                        <div class="uk-width-1-3@s">
                                            <h5>Data Perusahaan</h5>
                                        </div>
                                        <div class="uk-width-2-3@s">
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Sudah memiliki
                                                        usaha sendiri?</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder="" >
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Jenis
                                                        Usaha</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder="" name="jenis_usaha" value=" {{ $customer->jenis_usaha }}">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Nama
                                                        Perusahaan</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder="" name="nama_perusahaan" value=" {{ $customer->nama_perusahaan }}">
                                                    </div>
                                                </div>

                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Lama Berdiri
                                                        Perusahaan</label>
                                                    <div class="uk-form-controls">
                                                        <input type="number" class="uk-input" placeholder="" name="lama_perusahaan" value=" {{ $customer->lama_perusahaan }}">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Jumlah
                                                        Karyawan</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder="" name="jumlah_karyawan" >
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Omset per
                                                        Tahun</label>
                                                    <div class="uk-form-controls">
                                                        <input type="number" class="uk-input" placeholder="" name="omset_perusahaan" value=" {{ $customer->omset_perusahaan }}">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Foto/Video Produk
                                                        Usaha</label>
                                                    <div>
                                                        <img src="img/sample-kaos.jpeg" alt="">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Foto/Video Tempat
                                                        Usaha</label>
                                                    <div>
                                                        <img src="img/sample-store.jpeg" alt="">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Alamat
                                                        Website</label>
                                                    <div class="uk-form-controls">
                                                        <input type="url" class="uk-input" placeholder="" name="alamat_website">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label"
                                                        for="form-stacked-select">Marketplace</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder="" name="marketplace">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Kebutuhan
                                                        Nominal</label>
                                                    <div class="uk-form-controls">
                                                        <input type="number" class="uk-input" placeholder="" name="kebutuhan_nominal" value=" {{ $customer->kebutuhan_nominal }}">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Referensi</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder=""name="referensi" value=" {{ $customer->referensi }}">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Pekerjaan saat
                                                        ini</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder="" name="pekerjaan"  value=" {{ $customer->pekerjaan }}">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Pekerjaan saat
                                                        ini bergerak di bidang apa</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder="" >
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Rencana penjualan
                                                        yang akan dilakukan seperti apa?</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Nama/Jenis
                                                        Bahan</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Lebar
                                                        Kain</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Warna</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="uk-margin">
                                                    <label class="uk-form-label" for="form-stacked-select">Quantity</label>
                                                    <div class="uk-form-controls">
                                                        <input type="text" class="uk-input" placeholder="">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="uk-width-1-3@s">
                                        <div>
                                            <label class="uk-form-label">Kategori Customer</label>
                                            <div class="uk-form-controls">
                                                <select class="uk-select" name="customer_category_id">
                                                    @foreach($categori as $category)
                                                        <option value="{{ $category->id }}" {{ $customer->customer_category_id == $category->id ? 'selected' : '' }}>
                                                            {{ $category->nama }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                </div>
                            </div>

                            <div class="uk-margin-medium-top uk-flex uk-flex-between">
                                <div>
                                    <button type="submit" class="uk-button uk-button-primary uk-border-rounded text-right">Simpan</button>
                                </div>
                                <div>
                                    <a href="#modalPrintComplaint" class="uk-button uk-border-rounded uk-margin-small-right uk-button-default" uk-toggle>Cetak</a>
                                </div>

                            </div>
                        </form>


                    </div>
                </div>

            </div>




        </div>
    </main>
</x-app-layout>
