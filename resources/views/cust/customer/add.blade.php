<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Customer Experience</h3>
                </div>

                <div class="rz-panel uk-width-2-3@s">
                    <h4>Tambah Customer</h4>
                    <x-alert />

                    <form class="uk-form-stacked" method="POST" action="{{ route('customer.store') }}">
                        @csrf
                        <div class="uk-margin-large">
                            <div uk-grid>
                                <div class="uk-width-1-3@s">
                                    <h5>Category</h5>
                                </div>
                                <div class="uk-width-2-3@s">
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Jenis Customer</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select" name="customer_category_id" required>
                                                @foreach($categori as $category)
                                                <option value="{{ $category->id }}">{{ $category->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Wilayah</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select" name="wilayah_id">
                                                <option>--Pilih--</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div uk-grid>
                                <div class="uk-width-1-3@s">
                                    <h5>Data Pribadi</h5>
                                </div>
                                <div class="uk-width-2-3@s">

                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Nama Lengkap</label>
                                        <div class="uk-form-controls">
                                            <input type="text" class="uk-input" name="nama" required>
                                        </div>
                                    </div>
                                    <div class="uk-child-width-1-2" uk-grid>
                                        <div>
                                            <label class="uk-form-label" for="form-stacked-select">Tempat</label>
                                            <div class="uk-form-controls">
                                                <input type="text" class="uk-input" name="pob" required>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="uk-form-label" for="form-stacked-select">Tanggal Lahir</label>
                                            <div class="uk-form-controls">
                                                <input type="date" class="uk-input" name="dob" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Agama</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select" name="agama" required>
                                                <option value="">--Pilih--</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Konghucu">Konghucu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Jenis Kelamin</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select" name="jenis_kelamin" required>
                                                <option value="">--Pilih--</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Alamat Rumah</label>
                                        <div class="uk-form-controls">
                                            <textarea rows="5" class="uk-textarea" name="alamat" required></textarea>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" >Provinsi</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select" id="provinsi">
                                                <option value="">--Pilih--</option>
                                                @foreach ($provinces as $province)
                                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="uk-margin">
                                        <label class="uk-form-label" >Kota / Kabupaten</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select" id="kabupaten">
                                                <option value="">--Pilih--</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="uk-margin">
                                        <label class="uk-form-label">Kecamatan</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select" id="kecamatan">
                                                <option value="">--Pilih--</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">No HP</label>
                                        <div class="uk-form-controls">
                                            <input type="tel" class="uk-input" name="nohp">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Email</label>
                                        <div class="uk-form-controls">
                                            <input type="email" class="uk-input" name="email" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">No.KTP</label>
                                        <div class="uk-form-controls">
                                            <input type="text" class="uk-input" name="no_ktp" required>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">NPWP</label>
                                        <div class="uk-form-controls">
                                            <input type="text" class="uk-input" name="npwp">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Lama Berusaha</label>
                                        <div class="uk-form-controls">
                                            <input type="text" class="uk-input" name="lama_berusaha">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Omset per Tahun</label>
                                        <div class="uk-form-controls">
                                            <input type="number" class="uk-input" name="omset">
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
                                        <label class="uk-form-label" for="form-stacked-select">Nama Perusahaan</label>
                                        <div class="uk-form-controls">
                                            <input type="text" class="uk-input" name="nama_perusahaan">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Alamat Perusahaan</label>
                                        <div class="uk-form-controls">
                                            <textarea rows="5" class="uk-textarea" name="alamat_perusahaan"></textarea>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">No Telepon</label>
                                        <div class="uk-form-controls">
                                            <input type="tel" class="uk-input" name="tlp_perusahaan">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Email</label>
                                        <div class="uk-form-controls">
                                            <input type="email" class="uk-input" name="email_perusahaan">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Jenis Usaha</label>
                                        <div class="uk-form-controls">
                                            <input type="text" class="uk-input" name="jenis_usaha">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Omset per Tahun</label>
                                        <div class="uk-form-controls">
                                            <input type="number" class="uk-input" name="omset_perusahaan">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Kebutuhan Nominal</label>
                                        <div class="uk-form-controls">
                                            <input type="number" class="uk-input" name="kebutuhan_nominal">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Referensi</label>
                                        <div class="uk-form-controls">
                                            <input type="text" class="uk-input" name="referensi">
                                        </div>
                                    </div>

                                    <div class="uk-margin-large-top uk-text-right">
                                        <a href=""
                                            class="uk-button uk-border-rounded uk-margin-small-right uk-button-default">Cancel</a>
                                        <button type="submit"
                                            class="uk-button uk-button-primary uk-border-rounded">Save</button>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </form>
                </div>

            </div>


        </div>
    </main>
    @push('css')
    <link rel="stylesheet" href="{{ asset('plugins/datatable/datatable.uikit.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    @endpush
    @push('js')
    <script src="{{ asset('plugins/datatable/dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatable/datatable.uikit.min.js') }}"></script>
    @endpush

    @push('js')
    <script>
        $(document).ready(function () {
            $('#provinsi').on('change', function () {
                let id_provinsi = $(this).val();

                $.ajax({
                    type: 'POST', // Ubah menjadi 'GET' jika endpoint getKabupaten menggunakan metode GET
                    url: "{{ route('getkabupaten') }}",
                    data: {
                        id_provinsi: id_provinsi
                    },
                    cache: false,

                    success: function (msg) {
                        $('#kabupaten').html(msg); // Mengambil opsi dari respons JSON
                    },

                    error: function (data) {
                        console.log('error:', data);
                    }
                })
            })

            $('#kabupaten').on('change', function () {
                let id_kabupaten = $(this).val();

                $.ajax({
                    type: 'POST', // Ubah menjadi 'GET' jika endpoint getKabupaten menggunakan metode GET
                    url: "{{ route('getkecamatan') }}",
                    data: {
                        id_kabupaten: id_kabupaten
                    },
                    cache: false,

                    success: function (msg) {
                        $('#kecamatan').html(msg); // Mengambil opsi dari respons JSON
                    },

                    error: function (data) {
                        console.log('error:', data);
                    }
                })
            })


        });


        // // Ganti URL sesuai dengan route yang Anda buat
        // const citiesUrl = '/cities/'; // Ubah sesuai dengan rute yang Anda tetapkan di CustomerController
        // const districtsUrl = '/districts/'; // Ubah sesuai dengan rute yang Anda tetapkan di CustomerController

        // const provinsiDropdown = document.getElementById('provinsi');
        // const kotaDropdown = document.getElementById('kota');
        // const kecamatanDropdown = document.getElementById('kecamatan');

        // provinsiDropdown.addEventListener('change', function () {
        //     const selectedProvince = this.value;
        //     kotaDropdown.innerHTML = '<option value="">--Pilih--</option>';
        //     kecamatanDropdown.innerHTML = '<option value="">--Pilih--</option>';

        //     if (selectedProvince) {
        //         fetch(citiesUrl + selectedProvince)
        //             .then(response => response.json())
        //             .then(data => {
        //                 data.forEach(city => {
        //                     const option = document.createElement('option');
        //                     option.value = city.id;
        //                     option.text = city.name;
        //                     kotaDropdown.appendChild(option);
        //                 });
        //             });
        //     }
        // });

        // kotaDropdown.addEventListener('change', function () {
        //     const selectedCity = this.value;
        //     kecamatanDropdown.innerHTML = '<option value="">--Pilih--</option>';

        //     if (selectedCity) {
        //         fetch(districtsUrl + selectedCity)
        //             .then(response => response.json())
        //             .then(data => {
        //                 data.forEach(district => {
        //                     const option = document.createElement('option');
        //                     option.value = district.id;
        //                     option.text = district.name;
        //                     kecamatanDropdown.appendChild(option);
        //                 });
        //             });
        //     }
        // });

    </script>

    @endpush

</x-app-layout>
