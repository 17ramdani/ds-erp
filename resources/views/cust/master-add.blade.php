<x-app-layout>
    <main id="mainContent">

        <div class="rz-bodyContent">
            <div class="rz-container">
                <div>
                    <h3>Sales &amp; Marketing</h3>
                </div>



                <div class="rz-panel uk-width-2-3@s">
                    <h4>Tambah Customer</h4>

                    <div class="uk-margin-large">
                        <div uk-grid>
                            <div class="uk-width-1-3@s">
                                <h5>Category</h5>
                            </div>
                            <div class="uk-width-2-3@s">
                                <form class="uk-form-stacked">


                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Jenis Customer</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select">
                                                <option>--Pilih--</option>
                                                <option>Reguler</option>
                                                <option>Distributor</option>
                                                <option>Member</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Wilayah</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select">
                                                <option>--Pilih--</option>
                                            </select>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div uk-grid>
                            <div class="uk-width-1-3@s">
                                <h5>Data Pribadi</h5>
                            </div>
                            <div class="uk-width-2-3@s">
                                <form class="uk-form-stacked">


                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Nama Lengkap</label>
                                        <div class="uk-form-controls">
                                            <input type="text" class="uk-input" placeholder="">
                                        </div>
                                    </div>
                                    <div class="uk-child-width-1-2" uk-grid>
                                        <div>
                                            <label class="uk-form-label" for="form-stacked-select">Tempat</label>
                                            <div class="uk-form-controls">
                                                <input type="text" class="uk-input" placeholder="">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="uk-form-label" for="form-stacked-select">Tanggal Lahir</label>
                                            <div class="uk-form-controls">
                                                <input type="date" class="uk-input" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Agama</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select">
                                                <option>--Pilih--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Jenis Kelamin</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select">
                                                <option>--Pilih--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Alamat Rumah</label>
                                        <div class="uk-form-controls">
                                            <textarea rows="5" class="uk-textarea"></textarea>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Provinsi</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select">
                                                <option>--Pilih--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Kota / Kabupaten</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select">
                                                <option>--Pilih--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Kecamatan</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select">
                                                <option>--Pilih--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Kelurahan</label>
                                        <div class="uk-form-controls">
                                            <select class="uk-select">
                                                <option>--Pilih--</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">No HP</label>
                                        <div class="uk-form-controls">
                                            <input type="tel" class="uk-input" placeholder="">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Email</label>
                                        <div class="uk-form-controls">
                                            <input type="email" class="uk-input" placeholder="">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">No.KTP</label>
                                        <div class="uk-form-controls">
                                            <input type="text" class="uk-input" placeholder="">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">NPWP</label>
                                        <div class="uk-form-controls">
                                            <input type="text" class="uk-input" placeholder="">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Lama Berusaha</label>
                                        <div class="uk-form-controls">
                                            <input type="text" class="uk-input" placeholder="">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Omset per Tahun</label>
                                        <div class="uk-form-controls">
                                            <input type="number" class="uk-input" placeholder="">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div uk-grid>
                            <div class="uk-width-1-3@s">
                                <h5>Data Perusahaan</h5>
                            </div>
                            <div class="uk-width-2-3@s">
                                <form class="uk-form-stacked">


                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Nama Perusahaan</label>
                                        <div class="uk-form-controls">
                                            <input type="text" class="uk-input" placeholder="">
                                        </div>
                                    </div>

                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Alamat Perusahaan</label>
                                        <div class="uk-form-controls">
                                            <textarea rows="5" class="uk-textarea"></textarea>
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">No Telepon</label>
                                        <div class="uk-form-controls">
                                            <input type="tel" class="uk-input" placeholder="">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Email</label>
                                        <div class="uk-form-controls">
                                            <input type="email" class="uk-input" placeholder="">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Jenis Usaha</label>
                                        <div class="uk-form-controls">
                                            <input type="text" class="uk-input" placeholder="">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Omset per Tahun</label>
                                        <div class="uk-form-controls">
                                            <input type="number" class="uk-input" placeholder="">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Kebutuhan Nominal</label>
                                        <div class="uk-form-controls">
                                            <input type="number" class="uk-input" placeholder="">
                                        </div>
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-form-label" for="form-stacked-select">Referensi</label>
                                        <div class="uk-form-controls">
                                            <input type="text" class="uk-input" placeholder="">
                                        </div>
                                    </div>

                                    <div class="uk-margin-large-top uk-text-right">
                                        <a href="" class="uk-button uk-border-rounded uk-margin-small-right uk-button-default">Cancel</a>
                                        <a href="mod-sm-pesanan-index.php" class="uk-button uk-border-rounded uk-button-primary">Save</a>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

                </div>


            </div>




        </div>
    </main>
</x-app-layout>
